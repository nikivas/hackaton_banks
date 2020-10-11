## TL;DR
```bash
git clone --recursive https://github.com/nikivas/hackaton_banks.git
cd ./hackaton_banks/laradock
cp .env-example .env 
```
- Then custommize laradock enviroment
- After that customize project env like in laradock docker-compose settings:
```bash
cd ..
cp .env-example .env
```
- Run docker-compose:
```bash
cd ./laradock
docker-compose up -d mysql nginx
docker-compose exec workspace bash
php artisan migrate:refresh
```
Congratz!


