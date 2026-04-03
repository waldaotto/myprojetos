from gerarMapa import gerarMapa
from exibirMapa import exibirMapa
from time import sleep
from random import randint

bola = [4,4]
mapa = gerarMapa()

for i in range(50):
    seeker = [randint(0,9),randint(0,9)]
    print("\n")
    print("\n==================================================")
    exibirMapa(mapa,bola,seeker)
    sleep(0.6)

        





       
        


