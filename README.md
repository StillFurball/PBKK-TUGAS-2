| Name           | NRP        | 
| ---            | ---        | 
| Rafi Attar Maulana | 5025241141 | 

```powershell
git clone https://github.com/StillFurball/PBKK-TUGAS-2.git
cd PBKK-TUGAS-2
composer install
Copy-Item .env.example .env
composer run-script post-create-project-cmd
php artisan serve 
```
