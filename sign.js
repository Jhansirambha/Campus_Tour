const users = [
    { username: 'vamsi', password: 'vamsi123' },
    { username: 'pikachu', password: 'pikachu123' }
];
document.getElementById("login-form").addEventListener("submit", function (e) {
    e.preventDefault();
    const username = document.getElementById("username");
    console.log(username.value);
    const password = document.getElementById("password");
    console.log(password.value);
    const user = users.find(u => u.username === username.value && u.password === password.value);

    if (user) {
       alert('Login successful!');
        window.location.href = "userpage.html"
    } else {
        alert('Invalid credentials. Please try again.');
    }
});

            
            
            