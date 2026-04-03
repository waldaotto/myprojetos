from pynput import keyboard
import mapFuncs as mapf
import exibirMenu as menu
from time import sleep

cords = [0,0] # x y
cordsMarks = []

menu.menu()

sizeHeight = int(input("Tamanho do mapa em altura? : "))
sizeWidth = int(input("Tamanho do mapa em largura? : "))
map = mapf.generateMap(sizeWidth,sizeHeight) 

print("Seu mapa esta sendo gerado",end="",flush=True)
sleep(0.5)
print(".",end="",flush=True)
sleep(0.5)
print(".",end="",flush=True)
sleep(0.5)
print(".\n",flush=True)
print("Carregando mapa",end="",flush=True)
sleep(0.5)
print(".",end="",flush=True)
sleep(0.5)
print(".",end="",flush=True)
sleep(0.5)
print(".\n",flush=True)
print("\033[32mOperação concluida! Divirta-se.\033[0m")
sleep(1)
mapf.showMap(map,cords)
        
        
def on_press(tecla):
    if tecla == keyboard.Key.up: # PRA CIMA
        if cords[1] > 0:
            cords[1] -= 1
            mapf.showMap(map,cords,cordsMarks)
    if tecla == keyboard.Key.left: # PRA ESQURDA
        if cords[0] > 0:
            cords[0] -= 1
            mapf.showMap(map,cords,cordsMarks)
    if tecla == keyboard.Key.right: # PRA DIREITA
        if cords[0] < sizeWidth-1:
            cords[0] += 1
            mapf.showMap(map,cords,cordsMarks)
    if tecla == keyboard.Key.down: # PRA BAIXO
        if cords[1] < sizeHeight-1:
            cords[1] += 1
            mapf.showMap(map,cords,cordsMarks)


    if tecla == keyboard.Key.space:
        if [cords[0],cords[1]] in cordsMarks:
            cordsMarks.remove([cords[0],cords[1]])
            mapf.showMap(map,cords,cordsMarks)

        else:
            cordsMarks.append([cords[0],cords[1]])
            mapf.showMap(map,cords,cordsMarks)
    
    


with keyboard.Listener(on_press=on_press) as listener:
    listener.join()


