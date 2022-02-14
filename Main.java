public class Main{

    
    public static void main(String[] args){

        TimBola Arsenal;

        Arsenal = new TimBola();
        Arsenal.setNama("Meriam Lontong");
        Arsenal.setNegara("Inggris");
        Arsenal.setTahunBerdiri("1920");

        TimBola.Pemain[] Klub1 = new TimBola.Pemain[11];
 
        
        Klub1[0].setPemain("Udin");
        Klub1[1].setPemain("Eko");
        Klub1[2].setPemain("Jamal");
        Klub1[3].setPemain("Jajang");
        Klub1[4].setPemain("Eko");
        Klub1[5].setPemain("Bambang");
        Klub1[6].setPemain("Rudi");
        Klub1[7].setPemain("Utomo");
        Klub1[8].setPemain("Fandi");
        Klub1[9].setPemain("Yayan");
        Klub1[10].setPemain("Mad Dog");

       
        
        System.out.println(Arsenal.getNama());
        System.out.println(Arsenal.getNegara());
        System.out.println(Arsenal.getTahun());
        System.out.println(Klub1);
       
        
        
    }

  

}