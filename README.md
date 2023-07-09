# Phonebook Project

The Phonebook Project is a user-friendly web application developed using the Laravel framework. It enables users to efficiently manage their contacts and phone numbers by providing essential functionalities such as adding, viewing, editing, and deleting contacts.

features:
  - User registration and authentication system
  - Ability to add new contacts with their respective names and phone numbers
  - Conveniently view a list of all contacts
  - Effortlessly edit contact details
  - Seamlessly delete unwanted contacts

technologies_used:
  - Laravel: PHP web framework
  - Front-end: Blade templates, HTML, CSS, JavaScript
  - Database: MySQL

installation_steps:
  - step: Clone the repository
    command: git clone https://github.com/Mohib04/phonebook.git
  - step: Install project dependencies
    command: composer install
  - step: Copy the .env.example file to .env
    command: cp .env.example .env
  - step: Generate the application key
    command: php artisan key:generate
  - step: Set up the database
    instructions:
      - Create a new MySQL database.
      - Update the DB_DATABASE, DB_USERNAME, and DB_PASSWORD fields in the .env file with your database credentials.
  - step: Run database migrations
    command: php artisan migrate
  - step: Run npm install & npm run dev
    command: npm install & npm run dev
  - step: Take new Terminal and Start the development server
    command: php artisan serve
  - step: Access the application in a web browser
    instructions: Visit http://localhost:8000
  - step: Begin managing your contacts
    instructions:
      - Register a new user account or log in with an existing account.
      - Add, edit, or delete contact entries.

contributing:
  - step: Fork the repository
  - step: Create a new branch
    command: git checkout -b feature-name
  - step: Make changes and commit them
    command: git commit -m 'Add some feature'
  - step: Push changes to the branch
    command: git push origin feature-name
  - step: Open a pull request

license: Open-source license

contact:
  - name: Mohibbulla Munshi
  - email: mohib@gmail.com
## Supervisor
  - name: Tahsin Abrar
  - Lead Engineer - Brain Station 23
