# Custom HTML Button Widget for Zabbix 6.4+

This Zabbix module adds a customizable button widget to your dashboards. It is designed to provide a clean, styled link to external resources like wallboards, documentation, or external tools.
As a bonus feature, there will be an option added to ALL widgets to hide the header to make it even more smooth.

![Image](https://github.com/Uber1337NL/Zabbix-custom-HTML-Module-Widget/blob/main/img/In-action.png)

## Features
- **Customizable Text**: Set the label for your button.
- **Customizable URL**: Define where the button leads (opens in a new tab).
- **In-UI Styling**: Change the button's appearance (colors, padding, etc.) directly from the widget configuration using CSS.
- **No Refresh by Default**: Optimized for static links to prevent unnecessary dashboard reloading.

## Usage
Check the "Hide header" box in the widget configuration to remove the title bar when viewing the dashboard.

## Installation Instructions

### 1. Upload the Module
1. Locate your Zabbix frontend directory (usually `/usr/share/zabbix/ui/` or `/var/www/html/zabbix/`).
2. Navigate to the `modules/` directory.
3. Create a new folder named `custom_html_widget`.
4. Extract the contents of `custom_html_widget.zip` into this folder.
   - The structure should look like: `modules/custom_html_widget/manifest.json`, etc.

### 2. Set Permissions
Ensure the web server user (e.g., `www-data`, `apache`, or `nginx`) has read permissions for the files:
```bash
chown -R www-data:www-data /usr/share/zabbix/ui/modules/custom_html_widget
chmod -R 755 /usr/share/zabbix/ui/modules/custom_html_widget
```

### 3. Enable the Module in Zabbix
1. Log in to your Zabbix frontend as a Super Admin.
2. Go to **Administration** -> **General** -> **Modules**.
3. Click the **Scan directory** button at the top right.
4. Find **Custom HTML Button** in the list and click the **Disabled** status link to change it to **Enabled**.

### 4. Add to Dashboard
1. Go to your Dashboard.
2. Click **Edit dashboard** -> **Add widget**.
3. Select **Custom HTML Button** from the Type dropdown.
4. Configure your button text, URL, and style.
5. Click **Add** and then **Save changes** on the dashboard.

## Troubleshooting
- **Spinning Circle**: Ensure you have enabled the module in the Administration menu and that the `assets/js/class.widget.js` file is readable.
- **Module Not Found**: Double-check that the folder name in the `modules/` directory matches the `id` in `manifest.json` (`custom_html_widget`).
- **Changes Not Reflecting**: Clear your browser cache or perform a hard refresh (`Ctrl + Shift + R`) to reload the JavaScript assets.
