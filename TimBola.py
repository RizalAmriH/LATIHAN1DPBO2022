class TimBola :


    def __init__(self, nama = 0, negara = 0, tahun = 0):
        self.nama = nama
        self.negara = negara
        self.tahun = tahun

    class Pemain :
        def __init__(self, pemain):
            self.pemain = pemain

        def set_pemain(self, pemain):
            self.pemain = pemain

        def get_pemain(self):
            return self.pemain   
    
    def set_nama(self, nama):
        self.nama = nama    

    def set_negara(self, negara):
        self.negara = negara

    def set_tahun(self, tahun):
        self.tahun = tahun

    def get_nama(self):
        return self.nama

    def get_tahun(self):
        return self.tahun

    

    def get_negara(self):
        return self.negara

       
