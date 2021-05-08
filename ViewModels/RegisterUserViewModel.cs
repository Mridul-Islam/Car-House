using System.ComponentModel.DataAnnotations;



namespace Car_House.ViewModels
{
    public class RegisterUserViewModel
    {
        [Required]
        [EmailAddress]
        public string Email{get; set;}

        [Required]
        [DataType(DataType.Password)]
        public string Password{get; set;}

        [DataType(DataType.Password)]
        [Display(Name = "Confirm Password")]
        [Compare("Password", 
        ErrorMessage = "password and confirm password do not match")]
        public string ConfirmPassword{get; set;}
    }
}