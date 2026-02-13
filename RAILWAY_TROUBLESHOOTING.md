# Railway 500 Error - Troubleshooting Guide

## Common Causes of 500 Errors on Railway

### 1. Missing Environment Variables

Make sure these are set in Railway's dashboard (Variables tab):

- `APP_ENV` = `production`
- `APP_DEBUG` = `false`
- `APP_KEY` = `base64:hzutKpmXOMnIdJqhmg7dBDJrAkVxqS7rteyabf6R6lk=`
- `APP_URL` = `https://your-app-name.up.railway.app` (your actual Railway URL)
- `LOG_CHANNEL` = `stderr`
- `LOG_LEVEL` = `error`

### 2. Storage Permissions

Laravel needs write permissions for storage. Add this to your build command or create a setup script.

### 3. Missing Dependencies

Ensure all files are committed to git, including:
- `vendor/` should NOT be in git (it's in .gitignore, will be installed during build)
- `node_modules/` should NOT be in git
- But `package-lock.json` and `composer.lock` SHOULD be committed

### 4. Check Railway Logs

In Railway dashboard:
1. Go to your service
2. Click on "Deployments"
3. Click on the latest deployment
4. Check the "Logs" tab for error messages

### 5. Quick Fixes to Try

**Option A: Update Build Command**
Add storage setup to build:
```
composer install --no-dev --optimize-autoloader && npm ci && npm run build && php artisan storage:link
```

**Option B: Update Start Command**
Make sure it's:
```
php artisan serve --host=0.0.0.0 --port=$PORT
```

**Option C: Add Setup Script**
Create a script that runs before start to set permissions.
