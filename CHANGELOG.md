# Changelog

All notable changes to the Qoliber Admin Dark Mode module will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/).

## [2.0.0] - 2024-10-10

### Changed
- Major refactoring: Converted from theme-based architecture to module-based implementation
- Migrated repository from private to GitHub open source (git@github.com:qoliber/m2-admin-darkmode.git)
- Changed license from proprietary to MIT open source license
- Added dependency on qoliber/core module for shared functionality

### Removed
- Removed standalone Nanobots Core module (src/module-nanobots-core/)
  - Removed module-nanobots-core composer.json configuration
  - Removed ACL definitions (etc/acl.xml)
  - Removed system configuration (etc/adminhtml/system.xml)
  - Removed module.xml and registration.php
- Removed standalone Nanobots DarkMode module (src/module-nanobots-darkmode/)
  - Removed module composer.json
  - Removed adminhtml DI configuration (etc/adminhtml/di.xml)
  - Removed module.xml and registration.php
- Removed entire adminhtml-darkmode theme (src/theme-adminhtml-darkmode/)
  - Removed 5,202 lines of old LESS styles (web/css/styles-old.less)
  - Removed extensive Magento_Backend styling (275+ lines of _module-old.less)
  - Removed Magento_Analytics custom styles (171 lines)
  - Removed Magento_Backend admin login layout customization
  - Removed footer, header, main, and menu LESS modules
  - Removed action groups, headings groups styling
  - Removed notifications, search, and user dropdown styles
  - Removed breadcrumbs styling
  - Removed actions bar, collapsible blocks (620 lines), page navigation (374 lines)
  - Removed store switcher styling (329 lines)
  - Removed dashboard page styles (274 lines)
  - Removed login page styles (139 lines)
  - Removed cache management page styles
  - Removed access denied page styles
  - Removed Magento_Ui data grid styling (1,099 lines)
  - Removed data grid header, filters (425 lines), sticky header (287 lines) styles
  - Removed data grid action columns (106 lines) styling
  - Removed updater component styles
  - Removed all action components: dropdown (393 lines), multicheck, multiselect (424 lines), select, split, switcher
  - Removed all form components: calendar, color picker (508 lines), data tooltip, file insertion/uploader (434 lines)
  - Removed image uploader, media gallery (479 lines), timeline (426 lines) styles
  - Removed modal styles (518 lines combined)
  - Removed popup styles (657 lines combined)
  - Removed resizable blocks, rules, slider, spinner (219 lines), URL input styles
  - Removed form controls (324 lines), fields (818 lines), WYSIWYG styles
  - Removed checkbox/radio styles (199 lines)
  - Removed control collapsible (151 lines) and table (239 lines) styles
  - Removed field tooltips styling (112 lines)
  - Removed extensive variable definitions for colors, actions, animations, components, data grids, forms, icons, structure, typography
  - Removed utility classes for actions, animations, grid framework, spinner
  - Removed all custom images (logos, loaders, icons)
  - Removed theme JavaScript (612 lines of theme.js)
  - Removed loader JavaScript override (234 lines)
  - Removed theme.xml, registration.php, composer.json

### Added
- Moved Block/Adminhtml/Config/FrontendModel/TimeSlider.php from deeper path to root Block structure
- Moved Model/Config/Source/Selection.php from plugin path to Model structure
- Moved Plugin/Model/View/Design.php from deeper path to root Plugin structure
- Added LICENSE file (MIT license)
- Added comprehensive LICENSE.md with OSL 3.0 license text
- Added module-level etc/module.xml and registration.php
- Added centralized etc/adminhtml/di.xml configuration
- Moved etc/adminhtml/system.xml to module root
- Moved etc/config.xml to module root
- Added etc/acl.xml for module permissions
- Moved view/adminhtml/layout/adminhtml_system_config_edit.xml from theme to module
- Moved view/adminhtml/templates/config/renderer/time_slider.phtml from theme to module
- Moved view/adminhtml/web/css/config.css from theme to module

### Changed
- Updated TimeSlider block namespace and class location
- Simplified Selection source model with improved code organization
- Refactored Design plugin with enhanced functionality (32 lines modified)
- Updated system configuration to use new block paths
- Updated time slider template to reference new block structure
- Consolidated all dark mode functionality into single module
- Improved maintainability by removing theme dependency
- Reduced total codebase from 24,682 deletions to 269 additions (net reduction of 24,413 lines)

### Fixed
- Fixed origin product URL handling (Pull Request #2 by Morgy93)
- Corrected URL generation for product pages in dark mode

## [1.0.1] - 2024-09-01

### Fixed
- Initial code fixes and improvements
- Resolved early bugs and issues from 1.0.0 release

## [1.0.0] - 2024-08-15

### Added
- Initial release of Admin Dark Mode
- Implemented dark theme for Magento 2 admin panel
- Created custom adminhtml theme with dark color scheme
- Added extensive LESS styling for all admin components
- Implemented time-based automatic theme switching
- Created TimeSlider configuration renderer for setting dark mode schedule
- Added manual theme selection option
- Implemented Design plugin to switch between light and dark themes
- Styled all Magento admin areas: dashboard, catalog, sales, customers, marketing, content, reports, stores, system
- Customized login page with dark theme
- Added dark mode for data grids, forms, modals, notifications
- Styled admin menu, header, footer with dark colors
- Created dark variants for all UI components
- Added compatibility with Magento 2.4.x
- Set up dual-module architecture (Nanobots Core + DarkMode)
- Implemented theme-based approach with theme inheritance
