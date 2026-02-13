# Deployment Guide for Happy Valentines

This guide will help you deploy your Laravel Valentine's Day website to Render or Railway.

## Prerequisites

1. A GitHub account
2. Your code pushed to a GitHub repository
3. An account on Render or Railway

## ⚠️ Important: Video File Size

Your video file is **89MB**, which is very close to Render's 100MB limit. **Railway is recommended** as it has a 500MB limit.

---

## Option 1: Deploy to Render (⚠️ Video size warning)

### Steps:

1. **Push your code to GitHub**
   ```bash
   git init
   git add .
   git commit -m "Initial commit"
   git remote add origin YOUR_GITHUB_REPO_URL
   git push -u origin main
   ```

2. **Create a Render account**
   - Go to https://render.com
   - Sign up with GitHub

3. **Create a new Web Service**
   - Click "New +" → "Web Service"
   - Connect your GitHub repository
   - Select the repository

4. **Configure the service:**
   - **Name**: happy-valentines (or any name you like)
   - **Environment**: PHP
   - **Build Command**: `composer install --no-dev --optimize-autoloader && npm ci && npm run build`
   - **Start Command**: `php artisan serve --host=0.0.0.0 --port=$PORT`
   - **Plan**: Free

5. **Set Environment Variables:**
   - `APP_ENV` = `production`
   - `APP_DEBUG` = `false`
   - `APP_KEY` = `base64:hzutKpmXOMnIdJqhmg7dBDJrAkVxqS7rteyabf6R6lk=`
   - `LOG_CHANNEL` = `stderr`
   - `LOG_LEVEL` = `error`

6. **Deploy**
   - Click "Create Web Service"
   - Render will build and deploy your app
   - Your site will be available at `https://your-app-name.onrender.com`

### Generate APP_KEY:
```bash
php artisan key:generate --show
```
Copy the key and add it as `APP_KEY` in Render's environment variables.

---

## Option 2: Deploy to Railway (✅ Recommended)

### Steps:

1. **Push your code to GitHub** (same as above)

2. **Create a Railway account**
   - Go to https://railway.app
   - Sign up with GitHub

3. **Create a new project**
   - Click "New Project"
   - Select "Deploy from GitHub repo"
   - Choose your repository

4. **Railway will auto-detect Laravel**
   - It will use the `railway.json` configuration
   - The build and start commands are already configured

5. **Set Environment Variables:**
   - Go to your project → Variables
   - Add:
     - `APP_ENV` = `production`
     - `APP_DEBUG` = `false`
     - `APP_KEY` = `base64:hzutKpmXOMnIdJqhmg7dBDJrAkVxqS7rteyabf6R6lk=`
     - `LOG_CHANNEL` = `stderr`

6. **Deploy**
   - Railway will automatically deploy
   - Your site will be available at `https://your-app-name.up.railway.app`

---

## Important Notes

### File Size Limits:
- **Render Free Tier**: 100MB total (⚠️ Your video is 89MB - very close to limit!)
- **Railway Free Tier**: 500MB (✅ Your video is 89MB - plenty of room)
- Your video file (`Valentines.mov`) is 89MB - consider:
  - Compressing the video (use HandBrake or FFmpeg)
  - Converting to MP4 for better compatibility: `ffmpeg -i Valentines.mov -c:v libx264 -crf 23 -c:a aac -b:a 192k Valentines.mp4`
  - Using external storage (Cloudinary, AWS S3, or YouTube unlisted)
  - Or hosting the video separately and linking to it

### Storage:
- Both platforms have ephemeral storage (files may be deleted)
- Consider using external storage for:
  - Videos
  - User uploads
  - Large files

### Database (if needed later):
- Both platforms offer free PostgreSQL
- You can add a database service if needed

### Custom Domain:
- Both platforms allow custom domains on free tier
- Render: Add domain in service settings
- Railway: Add domain in project settings

---

## Troubleshooting

### Build fails:
- Check that all dependencies are in `composer.json` and `package.json`
- Ensure `APP_KEY` is set in environment variables

### Video not loading:
- Check file path: `/videos/Valentines.mov`
- Verify file is in `public/videos/` directory
- Check file size limits

### Assets not loading:
- Run `npm run build` locally first
- Ensure `public/build/` directory exists
- Check that Vite assets are built

---

## Quick Commands

### Generate APP_KEY:
```bash
php artisan key:generate --show
```

### Build assets locally:
```bash
npm install
npm run build
```

### Test locally:
```bash
php artisan serve
```

### Check video file size:
```bash
ls -lh public/videos/Valentines.mov
```

### Compress video (if needed):
```bash
# Install ffmpeg first, then:
ffmpeg -i public/videos/Valentines.mov -c:v libx264 -crf 23 -preset medium -c:a aac -b:a 192k public/videos/Valentines.mp4
```

Then update the video source in `resources/views/valentines.blade.php` to use `.mp4` instead of `.mov`.

---

## Need Help?

- Render Docs: https://render.com/docs
- Railway Docs: https://docs.railway.app
- Laravel Deployment: https://laravel.com/docs/deployment
