<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    // Register
    public function register(Request $request) {
        if ($request->isMethod("post")) {
    
            $request->validate([
                "name" => "required|string",
                "email" => "required|email|unique:users",
                "password" => "required",
                "phone" => "required",
                "date_of_birth" => "required",
                "country" => "required",
                "address" => "required",
                "province" => "required",
                "regency" => "required",
                "photo" => "nullable|image|mimes:jpeg,png,jpg,gif|max:2048"
            ]);

            // Simpan foto jika ada yang diupload
            if ($request->hasFile('photo')) {
             $file = $request->file('photo');
             $filename = time() . '.' . $file->getClientOriginalExtension();
             $photoPath = $file->storeAs('profile_photos', $filename, 'public');
            }
                            
    
            // Buat user baru dengan foto
            $user = User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => bcrypt($request->password),
                "phone" => $request->phone,
                "date_of_birth" => $request->date_of_birth,
                "country" => $request->country,
                "address" => $request->address,
                "province" => $request->province,
                "regency" => $request->regency,
                "photo" => $photoPath
            ]);        
            
            // Login otomatis setelah register
            if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {
                return to_route('login');
            } else {
                return to_route('register');
            }
        }
        return view("auth.register");
    }
    

    // Login
    public function login(Request $request) {
        if ($request->isMethod("post")) {
            $request->validate([
                "email" => "required|email",
                "password" => "required"
            ]);
    
            if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {
                // List email yang dianggap sebagai admin
                $adminEmails = [
                    'admin@gmail.com',
                    'tesadmin'
                ];
    
                if (in_array($request->email, $adminEmails)) {
                    return redirect()->route("admin.index");
                }
    
                return redirect()->route("home");
            } else {
                return redirect()->route("login")->with("error", "Invalid login details");
            }
        }
        return view("auth.login");
    }
    

    // Dashboard
    public function dashboard() {
        $user = Auth::user();
        return view('#', compact('user'));
    }
    

    // Profile
    public function profile(Request $request){
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    // Logout
    public function logout(){
        // After Login
        //echo "<h1>Logout Method</h1>";
        Session::flush();
        
        Auth::logout();

        return to_route("login")->with("success", "Logged out successfully");
    }
}
