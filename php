echo "# php-adtsys" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/lululu2016/php-adtsys.git
git push -u origin main

mkdir adtsys
sleep 2
echo "Boa tarde
" >> /www/adtsys/index.php
