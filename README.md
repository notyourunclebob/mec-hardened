# Words in Boxes - Vulnerable web app

An anonymous messaging app made to demonstrate mishandling of exceptional conditions from OWASPs top 10 vulnerabilities.

The app has rate limits and does check for cross site request forgery.

### Build in MacOS / Linux / WSL terminal:

1. Rename .env.example to .env

2. Install php / laravel / composer if needed
    - > /bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"

    - Or just laravel (if php and composer are already installed)

    - > composer global require laravel/installer

3. Run the script
    - Change ownership if needed

    - > chmod +x start.sh

    - Run
    - > ./start.sh

4. Open in browser
    - > localhost:8080
