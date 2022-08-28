<?php

namespace App\Http\Livewire\Authentication;

use App\Models\Compane;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Validation\Rules;

use function PHPUnit\Framework\isNull;

class Register extends Component
{
    public $name,$password,$email,$password_conf,$compane_code,
    $iscompane=false;
    public function render()
    {
        return view('livewire.authentication.register');
    }

   
private function get_compane_code(){
    $copame=Compane::select('id')->where('code_register',$this->compane_code)->first();
    if ($copame == null) {
    return null;
}
else  {
    return  $copame->id;
}

}


    public function store()
    {
        $compane_code =$this->get_compane_code();

        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', Rules\Password::defaults()],
            'password_conf' =>'required',
            'compane_code'=> $this->iscompane == true ? 'required':'',
        ]);
       // dd($this->iscompane&&$compane_code == null );
        if($this->iscompane && $compane_code == null ){
            return ;
              }

        


        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role'=> $this->iscompane == true ? 'companes':'user',
            'compane_id'=> $this->iscompane == true ? $this->get_compane_code():null,
        ]);

       event(new Registered($user));

        Auth::login($user);

        return redirect('home');
    }

    public function code($tayp)
    {

    $tayp=='compane'? $this->iscompane=true: $this->iscompane=false;
    }

}
