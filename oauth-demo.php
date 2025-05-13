<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .login-container {
            width: 360px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .login-header {
            background-color: #4285f4;
            color: white;
            padding: 20px;
            text-align: center;
        }
        
        .login-header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 500;
        }
        
        .login-body {
            padding: 20px;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
            font-size: 14px;
            color: #555;
        }
        
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        
        button {
            background-color: #4285f4;
            color: white;
            border: none;
            padding: 12px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            margin-top: 10px;
            font-weight: 500;
            transition: background-color 0.2s;
        }
        
        button:hover {
            background-color: #3367d6;
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
            color: #777;
            font-size: 14px;
        }
        
        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #ddd;
        }
        
        .divider span {
            padding: 0 10px;
        }
        
        .oauth-buttons {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .oauth-button {
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
            background-color: white;
            cursor: pointer;
            transition: background-color 0.2s;
            font-weight: 500;
        }
        
        .oauth-button:hover {
            background-color: #f5f5f5;
        }
        
        .oauth-button img {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }
        
        .google-login {
            color: #333;
        }
        
        .facebook-login {
            color: #1877f2;
        }
        
        .apple-login {
            color: #000;
        }
        
        .bottom-text {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
        
        .bottom-text a {
            color: #4285f4;
            text-decoration: none;
        }
        
        .bottom-text a:hover {
            text-decoration: underline;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #555;
        }
        
        .remember-me input {
            margin-right: 5px;
        }
        
        .forgot-password {
            text-align: right;
            font-size: 14px;
        }
        
        .forgot-password a {
            color: #4285f4;
            text-decoration: none;
        }
        
        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Sign in to Your Account</h1>
        </div>
        
        <div class="login-body">
            <!-- Traditional Login Form -->
            <form id="login-form">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" placeholder="Enter your email" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter your password" required>
                </div>
                
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div class="remember-me">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    
                    <div class="forgot-password">
                        <a href="#">Forgot password?</a>
                    </div>
                </div>
                
                <button type="submit">Sign In</button>
            </form>
            
            <!-- OAuth Login Section -->
            <div class="divider">
                <span>Or sign in with</span>
            </div>
            
            <div class="oauth-buttons">
                <button class="oauth-button google-login" onclick="oauthLogin('google')">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxOCIgaGVpZ2h0PSIxOCIgdmlld0JveD0iMCAwIDE4IDE4Ij48cGF0aCBmaWxsPSIjNDI4NUY0IiBkPSJNMTcuNjQgOS4yMDVjMC0uNjM5LS4wNTctMS4yNTItLjE2NC0xLjg0MUg5djMuNDgxaDQuODQ0YTQuMTQgNC4xNCAwIDAgMS0xLjc5NiAyLjcxNnYyLjI1OWgzLjExYy0uNjA3IDEuODM4LTIuMzI1IDMuMTY5LTQuMTU5IDMuMTY5eiIvPjxwYXRoIGZpbGw9IiMzNEE4NTMiIGQ9Ik09IDE4YzMuNTUgMCA2LjUzLTEuMTc0IDguNzEtMy4xNjhsLTMuMTEtMi4zOGMtLjg2Ljc0Mi0xLjk1IDEuMTgtMy4zMjcgMS4xOGMtMi41NTQgMC00LjcxOS0xLjcyOS01LjQ5OC00LjA2N2gtMy4yMmwyLjM0OSA1LjM0OEM2LjM0NCAxNi44NSA3LjYxMyAxOCA5IDE4eiIvPjxwYXRoIGZpbGw9IiNGQkJDMDUiIGQ9Ik0zLjUwNCA5LjU0OGMtLjIyMS0uNjQ1LS4zNDUtMS4zMjctLjM0NS0yLjA0M0MzLjE1OCA2Ljc5MiAzLjI4MiA2LjExMyAzLjUwNCA1LjQ1NWgtMy4yMkMuMDExIDYuNTcgMCA3Ljc5OCAwIDkuMDA1YzAgMS4yMDcuMDExIDIuNDYuMjg0IDMuNTYybDMuMjItMi4wMzl6Ii8+PHBhdGggZmlsbD0iI0VBNDMzNSIgZD0iTTkgMy41OTVjMS40MzYgMCAyLjcyNS40OTQgMy43MyAxLjQ2OGwyLjc1OS0yLjc1N0MxMy45NjEuNjk1IDExLjcxNiAwIDkgMCA1LjYxMyAwIDIuNzQ5IDEuOTkgMS4xNCA0Ljk1NGwzLjIxIDIuMDVDNS4yODIgNS4yNjkgNi45NDcgMy41OTUgOSAzLjU5NXoiLz48L3N2Zz4=">
                    Continue with Google
                </button>
                
                <button class="oauth-button facebook-login" onclick="oauthLogin('facebook')">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMiAzMiIgd2lkdGg9IjMyIiBoZWlnaHQ9IjMyIiBmaWxsPSIjMTg3N2YyIj48cGF0aCBkPSJNIDE2IDQgQyA5LjM4NDAgNCA0IDkuMzg0IDQgMTYgQyA0IDIxLjczMiA4LjEyIDI2LjQ1NiAxMy44MTIgMjcuNzgxMiBMIDEzLjgxMiAxOS44NDM4IEwgMTAuODc1IDE5Ljg0MzggTCAxMC44NzUgMTYuMDA3OCBMIDEzLjgxMiAxNi4wMDc4IEwgMTMuODEyIDEzLjE5MTQgQyAxMy44MTIgOS45MTggMTUuNzYyIDguMTY4IDE4Ljc2NiA4LjE2OCBDIDIwLjE5OCA4LjE2OCAyMS42NTYgOC40IDIxLjY1NiA4LjQgTCAyMS42NTYgMTEuNjkxNCBMIDE5Ljk5MiAxMS42OTE0IEMgMTguMzYgMTEuNjkxNCAxNy44NzUgMTIuNzM3MiAxNy44NzUgMTMuODA5NiBMIDE3Ljg3NSAxNi4wMDc4IEwgMjEuNDk2MTYgMTYuMDA3OCBMIDIwLjg1NTQ3IDE5Ljg0MzggTCAxNy44NzUgMTkuODQzOCBMIDE3Ljg3NSAyNy43ODEyIEMgMjMuNTY4IDI2LjQ1NiAyNy42ODggMjEuNzMyIDI3LjY4OCAxNiBDIDI3LjY4OCA5LjM4NCAyMi42MTYgNCAxNiA0IHoiLz48L3N2Zz4=">
                    Continue with Facebook
                </button>
                
                <button class="oauth-button apple-login" onclick="oauthLogin('apple')">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNSIgaGVpZ2h0PSIyNSIgdmlld0JveD0iMCAwIDI1IDI1Ij48cGF0aCBkPSJNMTUuODYyIDcuMDQxYy0uODIuMDQzLTEuODEuNDI3LTIuMzk1IDEuMDQ5LS41My41NjEtLjk5NCAxLjI4OS0uODIxIDIuMTc3Ljg5OC4wNjkgMS44MTctLjM3MSAyLjM4OC0uOTc3LjUzLS41NjEgMS4wMDUtMS4xOTIuODI4LTIuMjQ5em0tMS4xNDcgMy4xMThjLTEuMjcyLS4wNzgtMy4yMjMuNzMxLTMuMjIzIDMuMzA0IDAgMi40MzUgMi4xMDggNC45NCA0LjA2NSA0Ljk0Ljg0NiAwIDEuNjkyLS4zNDMgMi4yODEtLjY5NC45MS0uNTU1IDEuMjgxLTEuMDg0IDEuMjgxLTEuMDg0cy0uNzU0LS41NTUtLjc1NC0xLjc2OGMwLTEuMTAzLjc4MS0xLjYxMi43ODEtMS42MTJzLTEuMTczLTIuOTExLTIuMDIzLTIuOTExYy0uNjk3LS4wMDQtMS4xNzkuMzg2LTEuODcyLjM4Ni0uNzY3IDAtMS41Mi0uNDEzLTEuOTUtLjQxMy0uMDggMC0uMTUyLjAxNC0uMjE0LjAzOC0uMDg5LjAzOC0uMTU5LjEwNC0uMTU5LjEwNHMuNzIgLjM0OCAxLjIwNyAxLjE0NGMuMzQuNTU1LjU4IDEuMjM1LjU4IDEuNTY2bTE1LjA2LTUuNDI3SDBWMjVoMjkuNzc1VjQuNzMyem0tNy43NiA2LjI0NmMwLTEuODY4IDEuNTMzLTMuNDg2IDMuMzg1LTMuNjcydi0xLjA5SDguNDk0djE2Ljc1M2g0LjYyNXYtNS45ODRjMC0uMDUgMC0uMDk5LjAxMS0uMTQ4LjIwMS0xLjA4Ljk3NS0yLjAwNiAyLjE2NS0yLjAwNiAxLjUzNCAwIDEuOTg5IDEuMTY3IDEuOTg5IDIuODc2djUuMjYyaDQuNjExdi01LjcxMWMwLTQuMjY4LTIuNzQtNi4yOC01LjMyOS02LjI4LTIuNDkzIDAtMy41OSAxLjM5NC00LjE5NSAyLjM0M2gtLjAzMXYtMi4zNDNoLTQuNDN2MTIuMDBoNC42MjV2LTUuNTg0YzAtLjE2LjAxMy0uMzE5LjAzOC0uNDc0LjE1OC0xLjExNi45ODQtMi4xMTIgMi4xMjYtMi4xMTIgMS40ODIgMCAxLjk4OS45OTcgMS45ODkgMi40NjR2NS43MDZoNC42MTJ2LTYuMjk3eiIvPjwvc3ZnPg==">
                    Continue with Apple
                </button>
            </div>
            
            <div class="bottom-text">
                Don't have an account? <a href="#">Create account</a>
            </div>
        </div>
    </div>

    <script>
        // Handle traditional login form submission
        document.getElementById('login-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            // Here you would normally send the credentials to your server
            console.log('Login attempt with:', email);
            alert(`Login attempt with: ${email}`);
        });
        
        // Add OAuth configuration
        const oauthConfig = {
            google: {
                client_id: '',
                redirect_uri: 'https://google.com/oauth2callback',
                scope: 'email profile',
                auth_url: 'https://accounts.google.com/o/oauth2/v2/auth'
            },
            facebook: {
                client_id: '',
                redirect_uri: 'http://localhost/paypal-demo/callback.php',
                scope: 'email,public_profile',
                auth_url: 'https://www.facebook.com/v12.0/dialog/oauth'
            },
            apple: {
                client_id: 'YOUR_APPLE_SERVICE_ID',
                redirect_uri: 'http://localhost/paypal-demo/callback.php',
                scope: 'name email',
                auth_url: 'https://appleid.apple.com/auth/authorize'
            }
        };

        // Replace the existing oauthLogin function with this implementation
        function oauthLogin(provider) {
            const config = oauthConfig[provider];
            if (!config) {
                console.error('Invalid OAuth provider');
                return;
            }

            // Build OAuth URL
            const params = new URLSearchParams({
                client_id: config.client_id,
                redirect_uri: config.redirect_uri,
                response_type: 'code',
                scope: config.scope,
                state: generateRandomState()
            });

            // Store state in session storage for validation
            sessionStorage.setItem('oauth_state', params.get('state'));

            // Redirect to provider's authorization URL
            window.location.href = `${config.auth_url}?${params.toString()}`;
        }

        // Helper function to generate random state
        function generateRandomState() {
            return Math.random().toString(36).substring(2, 15) + 
                   Math.random().toString(36).substring(2, 15);
        }
    </script>
</body>
</html>