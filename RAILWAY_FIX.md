# Fix Railway 500 Error

## Quick Fix Steps:

### 1. Check Environment Variables in Railway Dashboard

Go to your Railway project → Variables tab and make sure these are set:

```
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:hzutKpmXOMnIdJqhmg7dBDJrAkVxqS7rteyabf6R6lk=
APP_URL=https://web-production-4bbeb.up.railway.app
LOG_CHANNEL=stderr
LOG_LEVEL=error
CACHE_STORE=file
SESSION_DRIVER=file
```

**Important:** Replace `web-production-4bbeb.up.railway.app` with your actual Railway URL.

### 2. Check Railway Logs

1. Go to Railway dashboard
2. Click on your service
3. Click "Deployments" tab
4. Click on the latest deployment
5. Check the "Logs" tab - this will show the actual error

### 3. Common Issues:

**Issue: Missing APP_KEY**
- Solution: Add `APP_KEY` environment variable in Railway

**Issue: Storage permissions**
- Solution: Railway handles this automatically, but if issues persist, the logs will show

**Issue: Missing dependencies**
- Solution: Make sure `composer.lock` and `package-lock.json` are committed to git

**Issue: Config cache problems**
- Solution: The start command now clears cache before starting

**Issue: SQLite database not found (cache/session error)**
- Solution: Cache and session drivers changed to 'file' instead of 'database'. Add `CACHE_STORE=file` and `SESSION_DRIVER=file` to environment variables if needed.

### 4. Redeploy

After adding environment variables:
1. Go to Railway dashboard
2. Click "Redeploy" on your service
3. Wait for deployment to complete
4. Check if error is fixed

### 5. Enable Debug Temporarily (to see actual error)

If still getting 500 error, temporarily set:
```
APP_DEBUG=true
```

This will show the actual error message. **Remember to set it back to `false` after fixing!**

### 6. Check Build Logs

In Railway:
1. Go to your service
2. Click on latest deployment
3. Check "Build Logs" tab
4. Look for any errors during build process
5. **Important**: Make sure you see `npm run build` completing successfully
6. Verify that `public/build` directory is created with `manifest.json` file

### 7. CSS/Assets Not Loading

If CSS is not loading:
1. **Check APP_URL is set correctly** - This is critical for Vite assets
2. Check Build Logs to ensure `npm run build` completed successfully
3. Verify `public/build/manifest.json` exists in build logs
4. Try temporarily setting `APP_DEBUG=true` to see if there are asset loading errors
5. Check browser console for 404 errors on CSS/JS files