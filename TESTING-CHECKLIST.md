# VentureTech Solutions Theme - Testing Checklist

## Pre-Deployment Testing

Use this checklist to ensure the theme is working correctly before deploying to production.

---

## ✅ Theme Activation

- [ ] Theme appears in **Appearance → Themes**
- [ ] Theme activates without errors
- [ ] No PHP warnings or errors in debug log
- [ ] Theme information displays correctly (name, version, author)

---

## ✅ Homepage Layout

### Hero Section
- [ ] "Excellence Excels." heading displays correctly
- [ ] Subtitle text is readable and properly formatted
- [ ] Hero image loads and displays properly
- [ ] Stats cards show correct numbers (100+, 145%, 30)
- [ ] Stats cards have proper spacing and alignment

### Services Section
- [ ] "/ Services" heading displays
- [ ] All three service cards render correctly:
  - [ ] IT Services card with microchip icon
  - [ ] Digital Marketing card with chart icon
  - [ ] Career Opportunities card with briefcase icon
- [ ] Service descriptions are complete and readable
- [ ] "Learn More" links are visible and styled correctly

---

## ✅ Responsive Design

### Mobile (320px - 767px)
- [ ] Navigation menu collapses to hamburger icon
- [ ] Mobile menu toggles open/close correctly
- [ ] Hero section stacks vertically (text above image)
- [ ] Stats cards stack vertically or wrap properly
- [ ] Service cards stack in single column
- [ ] Text is readable (not too small)
- [ ] Images scale appropriately
- [ ] No horizontal scrolling

### Tablet (768px - 1023px)
- [ ] Navigation displays properly
- [ ] Hero section maintains good layout
- [ ] Stats cards display in row
- [ ] Service cards display in grid (2-up or 3-up)
- [ ] Spacing is appropriate

### Desktop (1024px+)
- [ ] Full navigation menu displays horizontally
- [ ] Hero section is side-by-side (text + image)
- [ ] Stats cards display in row
- [ ] Service cards display in 3-column grid
- [ ] Container centers properly
- [ ] Max-width constraint works (1200px)

---

## ✅ Navigation

### Header
- [ ] Logo displays and links to homepage
- [ ] Desktop menu displays on larger screens
- [ ] Mobile hamburger icon displays on small screens
- [ ] Menu items are clickable (even if dummy links)
- [ ] Hover states work on desktop
- [ ] Header is sticky/fixed on scroll

### Mobile Menu
- [ ] Hamburger icon toggles menu open/close
- [ ] Menu slides/fades in smoothly
- [ ] Icon changes from bars to X when open
- [ ] Menu items are tap-friendly (proper spacing)
- [ ] Menu closes when clicking outside (if implemented)

---

## ✅ Footer

- [ ] Logo displays in footer
- [ ] Address displays correctly
- [ ] Email link is clickable (mailto:)
- [ ] Privacy, Terms, Accessibility links display
- [ ] Copyright year is dynamic (current year)
- [ ] Footer styling matches design
- [ ] Links have hover effects

---

## ✅ Typography & Colors

### Fonts
- [ ] IBM Plex Sans font loads correctly
- [ ] Font weights display properly (300, 400, 600, 700)
- [ ] Text is legible and well-spaced
- [ ] Line heights are appropriate

### Colors
- [ ] Primary background (#071a2b) displays correctly
- [ ] Panel backgrounds (#0d2940) for cards are visible
- [ ] Accent color (#0d5a8a) shows on links/buttons
- [ ] Muted text color (#9fb6c8) is readable
- [ ] Contrast is sufficient for accessibility

---

## ✅ Block Editor (Gutenberg)

### Pattern Insertion
- [ ] "Homepage Layout – VTS" pattern appears in pattern library
- [ ] Pattern inserts without errors
- [ ] All blocks render in editor
- [ ] Pattern preview shows correctly

### Block Editing
- [ ] Headings are editable
- [ ] Paragraphs are editable
- [ ] Images can be replaced
- [ ] Colors can be changed using theme palette
- [ ] Custom classes are preserved
- [ ] No console errors in editor

### Theme Settings
- [ ] Theme colors appear in color picker
- [ ] Font sizes are available in typography controls
- [ ] Spacing presets work
- [ ] Wide/full alignment options work

---

## ✅ Performance

- [ ] Page loads in under 3 seconds
- [ ] Images are optimized
- [ ] CSS is minified (production build)
- [ ] No unnecessary scripts loading
- [ ] No 404 errors for resources
- [ ] Fonts load efficiently

---

## ✅ Cross-Browser Testing

### Desktop Browsers
- [ ] Chrome (latest)
- [ ] Firefox (latest)
- [ ] Safari (latest)
- [ ] Edge (latest)

### Mobile Browsers
- [ ] Safari iOS
- [ ] Chrome Android
- [ ] Samsung Internet

---

## ✅ Accessibility

### Keyboard Navigation
- [ ] Tab key navigates through all links
- [ ] Enter/Space activates buttons
- [ ] Focus states are visible
- [ ] Skip to content link works

### Screen Reader
- [ ] Headings are hierarchical (H1 → H2 → H3)
- [ ] Images have alt text
- [ ] Links have descriptive text
- [ ] ARIA labels are present where needed
- [ ] Landmark regions are defined

### Color Contrast
- [ ] Text on background meets WCAG AA standards
- [ ] Links are distinguishable
- [ ] Focus indicators are visible

---

## ✅ SEO Basics

- [ ] Page title displays correctly
- [ ] Meta description can be set (via plugin)
- [ ] Headings structure is semantic
- [ ] Images have alt attributes
- [ ] Links are descriptive

---

## ✅ WordPress Integration

### Menus
- [ ] Primary menu location is registered
- [ ] Menu can be created and assigned
- [ ] Menu items can be added/removed
- [ ] Menu displays on frontend

### Pages
- [ ] "Home Page" template is available
- [ ] Template applies correctly to pages
- [ ] Block content renders on frontend
- [ ] Page content is editable

### Settings
- [ ] Static homepage can be set
- [ ] Site title and tagline work
- [ ] Permalink structure works

---

## ✅ Developer Checks

### Code Quality
- [ ] No PHP errors or warnings
- [ ] No JavaScript console errors
- [ ] HTML validates (W3C validator)
- [ ] CSS is properly scoped
- [ ] Functions are properly namespaced

### File Structure
- [ ] All required files present (style.css, functions.php, etc.)
- [ ] Assets folder contains all images
- [ ] Compiled CSS exists in assets/css/
- [ ] No unnecessary files (node_modules excluded)

### Git Repository
- [ ] .gitignore is properly configured
- [ ] README.md is comprehensive
- [ ] Commits have clear messages
- [ ] Repository is ready for push

---

## ✅ Documentation

- [ ] README.md is complete and accurate
- [ ] DEPLOYMENT.md provides clear instructions
- [ ] Code comments are present where needed
- [ ] Installation steps are documented

---

## 🐛 Known Issues

Document any known issues or limitations here:

1. _______________________________________________________________
2. _______________________________________________________________
3. _______________________________________________________________

---

## 📝 Notes for Client

Add any special instructions or notes for the client:

1. _______________________________________________________________
2. _______________________________________________________________
3. _______________________________________________________________

---

## Final Sign-Off

- [ ] All critical items checked
- [ ] Theme tested in Local by Flywheel
- [ ] Ready for deployment to staging/production
- [ ] Client has been notified
- [ ] Deployment guide has been reviewed

---

**Tested By**: _______________________  
**Date**: _______________________  
**Theme Version**: 1.0.0  
**WordPress Version**: _______________________  
**PHP Version**: _______________________

---

## Test on Local by Flywheel

To test the theme in your Local environment:

1. Open Local by Flywheel
2. Start the "vogelsang-vts-theme" site
3. Click "Admin" to open WordPress dashboard
4. Go to **Appearance → Themes**
5. Activate "VentureTech Solutions" theme
6. Follow the setup steps in README.md
7. Test each item in this checklist

**Local Site URL**: http://vogelsang-vts-theme.local (or your local URL)
