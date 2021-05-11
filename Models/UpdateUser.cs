using Microsoft.AspNetCore.Identity;
using System.ComponentModel.DataAnnotations;



namespace Car_House.Models
{
    public class UpdateUser : IdentityUser
    {
        //[Required]
        [Display(Name = "First Name")]
        public string FirstName{get; set;}

        //[Required]
        [Display(Name = "Last Name")]
        public string LastName{get; set;}
    }
}