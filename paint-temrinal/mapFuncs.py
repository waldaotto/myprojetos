def generateMap(sizeW,sizeH):
    map = {}

    for y in range(sizeH):
        map[y] = y
        map[y] = []

    for y in map:
        for x in range(sizeW):
            map[y].append(x)

    return map

def showMap(map = dict,player = list,marks = []):
    print("\n"*4)
    for y in map:
        for x in map[y]:
            cordinate = [x,y]
            if cordinate == player:
                print("X", end=" ")

            else:
                if len(marks)!=0:
                    if [cordinate[0],cordinate[1]] in marks:
                            print("\033[33mO\033[0m",end=" ")
                    else:
                        print(".",end=" ")
                else:
                    print(".",end=" ")
        print("\n")
        