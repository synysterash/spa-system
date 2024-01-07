# Spa Booking System
This project is for educational purposes. 

## Prerequisites
This project uses 
- Lando
- Docker

Make sure you have installed Lando from Homebrew or its official website at https://lando.dev.

### Homebrew installation
Run this in your terminal `brew install lando` or `brew install --cask lando` if the first one fails.

## Installation
- Clone this project to your workspace.
- Copy the `.env.example` and change your `.env` file accordingly.
- Run this in your terminal `lando start` and watch the magic happens.
- Test it out by going to `https://spa-booking.lndo.site`.

## Usage 
Make sure to run the artisan commands in order for Laravel to do its magic.
- `lando artisan migrate`
- `lando artisan db:seed`
### For front-end purposes
- `npm install`
- `npm run dev`

## Extra info
This project utilises Laravel Breeze as authorization and TailwindCSS for its beauty. 
