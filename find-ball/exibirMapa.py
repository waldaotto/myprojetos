def exibirMapa(mapa,posBola,posSeeker):
    for i in mapa:
        for x in i:
            print("\n")
            for f in range(10):
                cord = i[x][f]
                if cord == posBola:
                    print("O",end=" ")
                else:
                    print(".",end=" ")
                if cord == posSeeker:
                    print("X",end=" ")
                else:
                    print(".",end=" ")
