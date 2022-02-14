from TimBola import TimBola

tim1 = TimBola()
tim1.set_nama("KST Pusat")
tim1.set_negara("Madagascar")
tim1.set_tahun("2000")

pemaintim  = [TimBola.Pemain]

pemaintim[0].set_pemain("Udin")
pemaintim[1].set_pemain("Eko")
pemaintim[2].set_pemain("Bambang")
pemaintim[3].set_pemain("Rudi")
pemaintim[4].set_pemain("Eko")
pemaintim[5].set_pemain("Utomo")
pemaintim[6].set_pemain("Fandi")
pemaintim[7].set_pemain("Yayan")
pemaintim[8].set_pemain("Mad Dog")
pemaintim[9].set_pemain("Ruslan")
pemaintim[10].set_pemain("Jajang")



print(tim1.get_nama)
print(tim1.get_negara)
print(tim1.get_tahun)

for i in range(11):
    print(pemaintim[i].get_pemain)
