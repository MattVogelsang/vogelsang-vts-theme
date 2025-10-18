# VentureTech Solutions Theme - Deployment Guide

## Overview

This guide covers deploying the VentureTech Solutions WordPress theme to:
1. GitHub (or other Git repository platform)
2. Production server

## Prerequisites

- Git installed on your local machine
- GitHub account (or GitLab/Bitbucket)
- FTP/SFTP client or SSH access to production server
- Server credentials provided by client

---

## Part 1: Upload to GitHub

### Step 1: Create GitHub Repository

1. Go to [GitHub](https://github.com) and log in
2. Click the **+** icon in the top right → **New repository**
3. Repository settings:
   - **Name**: `venturetech-wordpress-theme` (or your preferred name)
   - **Description**: VentureTech Solutions WordPress theme built with Gutenberg blocks and Tailwind CSS
   - **Visibility**: Private or Public (your choice)
   - **DO NOT** initialize with README (we already have one)
4. Click **Create repository**

### Step 2: Connect Local Repository to GitHub

```bash
# Navigate to theme directory
cd ~/Local\ Sites/vogelsang-vts-theme/app/public/wp-content/themes/vogelsang-vts-theme

# Add remote repository (replace YOUR_USERNAME with your GitHub username)
git remote add origin https://github.com/YOUR_USERNAME/venturetech-wordpress-theme.git

# Verify remote was added
git remote -v

# Push to GitHub
git branch -M main
git push -u origin main
```

### Step 3: Verify Upload

1. Refresh your GitHub repository page
2. You should see all theme files uploaded
3. The README.md should be displayed on the repository home page

### Alternative: Using GitHub Desktop

1. Open GitHub Desktop
2. File → Add Local Repository
3. Navigate to the theme folder
4. Click "Publish repository"
5. Choose visibility (Private/Public) and confirm

---

## Part 2: Upload to Production Server

### Option A: Using FTP/SFTP (Recommended for ease)

#### Using FileZilla or Similar FTP Client:

1. **Connect to Server**
   - Host: [provided by client]
   - Username: [provided by client]
   - Password: [provided by client]
   - Port: 21 (FTP) or 22 (SFTP)

2. **Navigate to WordPress Themes Directory**
   ```
   /public_html/wp-content/themes/
   or
   /home/username/public_html/wp-content/themes/
   ```

3. **Upload Theme**
   - Create a new folder: `vogelsang-vts-theme`
   - Upload all theme files EXCEPT:
     - `node_modules/` folder (not needed on server)
     - `.git/` folder (optional, can exclude)
   - Make sure `assets/css/style.css` is uploaded (compiled CSS)

4. **Verify Upload**
   - Check that all PHP files are present
   - Verify `style.css` exists in root
   - Ensure `assets/` folder with images is uploaded

#### Files/Folders to Upload:

```
✅ Upload these:
- style.css
- functions.php
- header.php
- footer.php
- index.php
- page-home.php
- theme.json
- README.md
- assets/ (entire folder with images and CSS)
- patterns/ (entire folder)
- src/ (entire folder)

❌ DON'T upload these:
- node_modules/
- .git/ (optional, can skip)
- .DS_Store
- package-lock.json (optional)
```

### Option B: Using SSH/Terminal (Advanced)

```bash
# Create a clean build without dev files
cd ~/Local\ Sites/vogelsang-vts-theme/app/public/wp-content/themes
tar -czf vogelsang-vts-theme.tar.gz \
  --exclude='node_modules' \
  --exclude='.git' \
  --exclude='.DS_Store' \
  vogelsang-vts-theme/

# Upload to server via SCP
scp vogelsang-vts-theme.tar.gz username@server-ip:/path/to/wp-content/themes/

# SSH into server
ssh username@server-ip

# Extract the theme
cd /path/to/wp-content/themes/
tar -xzf vogelsang-vts-theme.tar.gz
rm vogelsang-vts-theme.tar.gz

# Set proper permissions
chmod 755 vogelsang-vts-theme
find vogelsang-vts-theme -type d -exec chmod 755 {} \;
find vogelsang-vts-theme -type f -exec chmod 644 {} \;
```

### Option C: Using WordPress Dashboard (Easy Method)

1. **Create ZIP File**
   ```bash
   cd ~/Local\ Sites/vogelsang-vts-theme/app/public/wp-content/themes
   zip -r vogelsang-vts-theme.zip vogelsang-vts-theme \
     -x "*/node_modules/*" "*/.git/*" "*/.DS_Store"
   ```

2. **Upload via WordPress**
   - Log in to production WordPress admin
   - Go to **Appearance → Themes → Add New → Upload Theme**
   - Choose the ZIP file
   - Click **Install Now**
   - Activate the theme

---

## Part 3: Post-Deployment Setup

### On Production Server

1. **Activate Theme**
   - WordPress Admin → Appearance → Themes
   - Find "VentureTech Solutions"
   - Click **Activate**

2. **Create Navigation Menu**
   - Go to Appearance → Menus
   - Create menu with items:
     - IT Services
     - Digital Marketing
     - Career Opportunities
   - Assign to "Primary Menu" location

3. **Create Homepage**
   - Pages → Add New
   - Title: "Home"
   - Template: "Home Page"
   - Insert Pattern: "Homepage Layout – VTS"
   - Publish

4. **Set Static Homepage**
   - Settings → Reading
   - Select "A static page"
   - Homepage: "Home"
   - Save

5. **Upload Logo (if needed)**
   - Media → Add New
   - Upload logo files if not already in theme

6. **Test Responsive Design**
   - Test on mobile devices
   - Check all breakpoints
   - Verify navigation works

---

## Part 4: Maintenance & Updates

### Making Changes

1. **Edit Locally**
   - Make changes in Local by Flywheel
   - Test thoroughly

2. **Commit to Git**
   ```bash
   git add .
   git commit -m "Description of changes"
   git push
   ```

3. **Deploy to Server**
   - Re-upload changed files via FTP
   - Or use automated deployment (see below)

### Automated Deployment (Optional - Advanced)

Consider setting up:
- GitHub Actions for CI/CD
- WP Pusher plugin for automated updates
- DeployHQ or similar service

---

## Troubleshooting

### Theme Not Showing in WordPress

- Check that `style.css` has proper theme header
- Verify file permissions (755 for folders, 644 for files)
- Check server error logs

### Styles Not Loading

- Ensure `assets/css/style.css` was uploaded
- Clear WordPress cache
- Clear browser cache
- Check file permissions

### Images Not Displaying

- Verify `assets/` folder was uploaded completely
- Check image paths in patterns
- Ensure proper file permissions

### Mobile Menu Not Working

- Check that `src/main.js` was uploaded
- Verify Font Awesome is loading
- Check browser console for JavaScript errors

---

## Server Requirements Checklist

✅ PHP 7.4 or higher  
✅ WordPress 6.0 or higher  
✅ mod_rewrite enabled (for pretty permalinks)  
✅ HTTPS enabled (recommended)  
✅ Adequate storage for theme files (~5MB)

---

## Security Recommendations

1. **Use SFTP instead of FTP** (encrypted connection)
2. **Keep WordPress updated** to latest version
3. **Use strong passwords** for FTP/SSH access
4. **Backup regularly** before making changes
5. **Monitor file permissions** - don't use 777
6. **Enable WordPress security plugins** (Wordfence, iThemes Security)

---

## Support & Documentation

- **Theme Documentation**: See README.md
- **WordPress Codex**: https://codex.wordpress.org
- **Tailwind CSS Docs**: https://tailwindcss.com/docs
- **Gutenberg Handbook**: https://developer.wordpress.org/block-editor/

---

## Quick Command Reference

```bash
# Git commands
git status                  # Check repository status
git add .                   # Stage all changes
git commit -m "message"     # Commit changes
git push                    # Push to remote repository

# Build commands (if making CSS changes)
npm run build               # Build production CSS
npm run dev                 # Watch mode for development

# Create deployment ZIP
zip -r theme.zip vogelsang-vts-theme -x "*/node_modules/*" "*/.git/*"
```

---

**Last Updated**: October 2025  
**Theme Version**: 1.0.0
