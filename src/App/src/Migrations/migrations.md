# Migrations
This is where the migrations are stored for this application.

The jump start project will not contain migrations,
but you can create your own:
```bash
./vendor/bin/doctrine-migrations migrations:diff

# Check the generated migrations

./vendor/bin/doctrine-migrations migrations:migrate
```