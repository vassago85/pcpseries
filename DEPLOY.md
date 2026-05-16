# PCP Series — deployment

## Repository

- **Server:** `41.72.157.26` (user `paul`)
- **Path:** `/opt/pcpseries`
- **Domain:** `https://pcp.charsleydigital.co.za`
- **Mockup URL:** `/pcp-series-mockup`

## First-time server setup

```bash
ssh paul@41.72.157.26

sudo mkdir -p /opt/pcpseries
sudo chown paul:paul /opt/pcpseries
cd /opt/pcpseries

git clone https://github.com/vassago85/pcpseries.git .

cp docker/env.production.example .env
# Generate APP_KEY on host:
php -r "echo 'APP_KEY=base64:'.base64_encode(random_bytes(32)).PHP_EOL;"
# Paste into .env, set APP_URL=https://pcp.charsleydigital.co.za

docker compose -f docker-compose.prod.yml build --no-cache app
docker compose -f docker-compose.prod.yml up -d
```

## Nginx Proxy Manager

- **Domain:** `pcp.charsleydigital.co.za`
- **Forward to:** `pcpseries-app:80` (scheme `http`)
- **Network:** `nginx-proxy-manager_default`
- **SSL:** Let's Encrypt, Force SSL, HTTP/2

## DNS (xneelo)

| Type | Host | Points to |
|------|------|-----------|
| A | `pcp` | `41.72.157.26` |

## CSS broken over HTTPS?

NPM terminates SSL and forwards HTTP to the container. The app must trust `X-Forwarded-Proto` and use `APP_URL=https://...` (not `http://`). After pulling the proxy fix:

```bash
cd /opt/pcpseries
git pull origin main
grep -q '^ASSET_URL=' .env || echo 'ASSET_URL=' >> .env
sed -i 's|^APP_URL=.*|APP_URL=https://pcp.charsleydigital.co.za|' .env
docker compose -f docker-compose.prod.yml build --no-cache app
docker compose -f docker-compose.prod.yml up -d --force-recreate app
docker compose -f docker-compose.prod.yml exec app php artisan optimize:clear
docker compose -f docker-compose.prod.yml exec app php artisan optimize
```

Hard-refresh the browser (Ctrl+F5). Check CSS loads: `https://pcp.charsleydigital.co.za/build/assets/` should not 404.

## Updates (after every `git pull`)

**Rebuild required** — code is baked into the image.

```bash
cd /opt/pcpseries
git pull origin main
docker compose -f docker-compose.prod.yml build --no-cache app
docker compose -f docker-compose.prod.yml up -d --force-recreate app
```

## Local (Docker Desktop)

```powershell
cd pcpseries
docker compose -f docker-compose.local.yml up --build
```

Open: http://localhost:8089/pcp-series-mockup
