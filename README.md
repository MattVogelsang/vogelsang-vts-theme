# VentureTech Solutions WordPress Theme

A modern, responsive WordPress theme built for VentureTech Solutions using Gutenberg blocks and Tailwind CSS. This theme follows WordPress best practices and requires no page builders.

![WordPress](https://img.shields.io/badge/WordPress-6.0%2B-blue.svg)
![PHP](https://img.shields.io/badge/PHP-7.4%2B-purple.svg)
![License](https://img.shields.io/badge/License-GPL--2.0-green.svg)

## Features

- ✅ **Pure Gutenberg Blocks** - Built with native WordPress blocks, no Elementor or other page builders
- 🎨 **Tailwind CSS** - Modern utility-first CSS framework for rapid development
- 📱 **Fully Responsive** - Mobile-first design that works on all devices
- ♿ **Accessible** - WCAG 2.1 compliant with proper semantic HTML
- 🎯 **Performance Optimized** - Minified CSS and optimized assets
- 🎨 **Custom Block Patterns** - Pre-built homepage layout pattern
- 🎨 **Theme.json** - Full block editor integration with custom color palette
- 🔧 **Developer Friendly** - Clean code structure with proper documentation

## Requirements

- WordPress 6.0 or higher
- PHP 7.4 or higher
- Node.js 14+ and npm (for development)

## Installation

### Quick Install (Production)

1. Download the theme ZIP file
2. In WordPress admin, go to **Appearance → Themes → Add New → Upload Theme**
3. Choose the ZIP file and click **Install Now**
4. Click **Activate** to activate the theme

### Manual Install

1. Clone or download this repository
2. Upload the `vogelsang-vts-theme` folder to `/wp-content/themes/`
3. Activate the theme through the **Appearance → Themes** menu in WordPress

## Setup Instructions

1. **Create Navigation Menu**
   - Go to **Appearance → Menus**
   - Create a new menu with items: "IT Services", "Digital Marketing", "Career Opportunities"
   - Assign it to the "Primary Menu" location

2. **Create Homepage**
   - Go to **Pages → Add New**
   - Title it "Home"
   - Select the **Home Page** template from the Template dropdown
   - In the block editor, click the **Patterns** icon (⊞)
   - Insert the **"Homepage Layout – VTS"** pattern
   - Publish the page

3. **Set Static Homepage**
   - Go to **Settings → Reading**
   - Select **A static page** under "Your homepage displays"
   - Choose "Home" as the homepage
   - Save changes

4. **Customize Colors & Typography** (Optional)
   - The theme includes a custom color palette in **theme.json**
   - Colors can be accessed in the block editor's color picker
   - IBM Plex Sans font is loaded automatically

## Development

### Prerequisites

```bash
# Install Node.js dependencies
npm install
```

### Build Commands

```bash
# Development mode - watch for changes
npm run dev

# Production build - minified CSS
npm run build
```

### File Structure

```
vogelsang-vts-theme/
├── assets/                 # Compiled assets
│   ├── css/               # Compiled Tailwind CSS
│   │   └── style.css
│   └── images/            # Theme images and logos
├── patterns/              # Block patterns
│   └── homepage.php       # Homepage layout pattern
├── src/                   # Source files
│   ├── styles/           
│   │   └── main.css       # Tailwind source
│   └── main.js            # JavaScript source
├── functions.php          # Theme functions
├── header.php             # Header template
├── footer.php             # Footer template
├── index.php              # Main template
├── page-home.php          # Homepage template
├── style.css              # Theme stylesheet (required)
├── theme.json             # Block editor config
├── package.json           # npm dependencies
├── tailwind.config.js     # Tailwind configuration
└── postcss.config.js      # PostCSS configuration
```

## Customization

### Colors

The theme uses a custom color palette defined in `tailwind.config.js` and `theme.json`:

- **Primary** (#071a2b) - Dark blue background
- **Panel** (#0d2940) - Card backgrounds
- **Accent** (#0d5a8a) - Links and CTAs
- **Muted** (#9fb6c8) - Secondary text

### Typography

The theme uses **IBM Plex Sans** font family with multiple weights (300, 400, 600, 700).

### Responsive Breakpoints

```
sm:  640px
md:  768px
lg:  1024px
xl:  1200px
```

## Block Patterns

### Homepage Layout Pattern

The theme includes a complete homepage layout pattern that includes:

- Hero section with heading, description, and stats
- Services section with three service cards
- Fully responsive grid layout
- All editable via the Gutenberg block editor

To use: Insert the pattern in the block editor by clicking the Patterns icon (⊞) and selecting "Homepage Layout – VTS".

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Contributing

This is a custom theme for VentureTech Solutions. For issues or suggestions, please contact the developer.

## Credits

- **Developer**: Matt Vogelsang
- **Framework**: WordPress Block Editor (Gutenberg)
- **CSS Framework**: Tailwind CSS
- **Fonts**: IBM Plex Sans (Google Fonts)
- **Icons**: Font Awesome

## License

This theme is licensed under the GNU General Public License v2 or later.

## Support

For support or questions about this theme, please contact:
- Email: info@venturetechsolutions.com
- Website: https://www.venturetechsolutions.com

---

**Version**: 1.0.0  
**Last Updated**: October 2025
