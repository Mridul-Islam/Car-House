using System.Collections.Generic;


namespace Car_House.Models
{
    public class Brand
    {
        public int BrandID {get; set;}
        public string BrandName{ get; set; }
        public ICollection<Car> Cars {get; set;}
    }
}