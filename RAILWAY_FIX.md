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
