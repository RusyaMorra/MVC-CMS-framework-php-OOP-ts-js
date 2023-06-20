/*
/ registration class, created for handle inputs
*/

class RegisterValidateClass {
  
    public form: HTMLInputElement | undefined;
    public email: string | undefined;
    public username: string | undefined;
    public phone: number | undefined;
    public password: string | undefined;
    public passwordRepeat: string | undefined;

    constructor(validationFields: HTMLInputElement){
       this.form = validationFields;
       this.PreventForm();
    }


    private PreventForm():void{
        this.form?.addEventListener('submit', function(event: SubmitEvent){
            console.log("me and all my relatives are owned by China");
            event.preventDefault();
        }) 
    }

    private extractFields():any{
        return this.form 
    }


    
}
 



let tom = new RegisterValidateClass((document.querySelector('.validate-form') as HTMLInputElement));
 