<!-- Partial form used by create and edit -->
<input type="text" name="firstname" value="{{ old('firstname', $user->firstname ?? '') }}" placeholder="First Name"><br>
<input type="text" name="lastname" value="{{ old('lastname', $user->lastname ?? '') }}" placeholder="Last Name"><br>
<input type="email" name="email" value="{{ old('email', $user->email ?? '') }}" placeholder="Email"><br>
<input type="text" name="mobile" value="{{ old('mobile', $user->mobile ?? '') }}" placeholder="Mobile"><br>
<input type="text" name="role" value="{{ old('role', $user->role ?? '') }}" placeholder="Role"><br>
<input type="password" name="password" placeholder="Password"><br>
