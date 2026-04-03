def gerarMapa():
    mapa = []
    linhas = {
        0: [],
        1: [],
        2: [],
        3: [],
        4: [],
        5: [],
        6: [],
        7: [],
        8: [],
        9: [],
    }
    mapa = [linhas]

    for y in range(10):
        for x in range(10):
            linhas[y].append([x,y])
    return mapa