



class RegisterValidateClass {
  
    name: string | undefined;
    age: number | undefined;
    print(){
        console.log(`name: ${this.name}  age: ${this.age}`);
    }
    toString(): string{
        return `${this.name}: ${this.age}`;
    }
}
 
let tom = new RegisterValidateClass();
tom.name = "Tom";
tom.age = 36;
tom.print();                    // name: Tom  age: 36
 
console.log(tom.toString());    // Tom: 36