using System.ComponentModel.DataAnnotations;
using System.Collections.Generic;
using Microsoft.AspNetCore.Http;


namespace Car_House.ViewModels
{
    public class ProfileViewModel
    {
        [EmailAddress]
        [Display(Name = " Email Address : ")]
        public string UserID { get; set; }

        [Required]
        public string FirstName { get; set; }

        [Required]
        public string LastName { get; set; }

        public string ProfilePicture { get; set; } 
        [Display(Name ="Name : ")]
        public string FullName
        { 
            get
            {
                return FirstName + " " + LastName;
            }
        }
        [Display(Name="Old Password")]
        [DataType(DataType.Password)]
        [Required(ErrorMessage ="Enter Password")]
        public string OldPassword { get; set; }

        [Required]
        [Display(Name ="New Password")]
        [DataType(DataType.Password)]
        public string NewPassword { get; set; }


        [Required]
        [Display(Name ="Confirm New Password")]
        [DataType(DataType.Password)]
        [Compare("NewPassword", ErrorMessage = ("Password Mismatches"))]
        public string ConfirmPassword { get; set; }


         [Display(Name = "Select Image")]
         public IFormFile Images { get; set; }
    }
}