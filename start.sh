git checkout v1
git pull

##recuperation du sample v1
rm -rf samplephpwebsite

git clone https://github.com/Akasam/samplephpwebsite
cd samplephpwebsite
git checkout v1
git pull
cd ..

docker-compose up --build

read -p "Press any key to continue... " -n1 -s

##v2
docker-compose down

git checkout v2
git pull

cd samplephpwebsite
git checkout v2
git pull
cd ..

docker-compose up --build

read -p "Press any key to continue... " -n1 -s


##v3
docker-compose down

git checkout v3
git pull

cd samplephpwebsite
git checkout v3
git pull
cd ..

docker-compose up --build

read -p "Press any key to continue... " -n1 -s


docker-compose down
