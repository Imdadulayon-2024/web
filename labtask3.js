window.addEventListener('DOMContentLoaded', function () {
  // Clear body
  document.body.innerHTML = "";

  // Add styles
  const style = document.createElement('style');
  style.textContent = `
    body {
      font-family: Arial, sans-serif;
      background-color: #b30000;
      margin: 0;
      padding: 20px;
    }
    form {
      background-color: #ffffff;
      padding: 25px 30px 30px 30px;
      border-radius: 14px;
      max-width: 400px;
      margin: 60px auto 0 auto;
      box-shadow: 0px 8px 32px rgba(0, 0, 0, 0.18);
      opacity: 0;
      transform: translateY(40px);
      animation: fadeInUp 1s ease forwards;
      position: relative;
    }
    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    h1.lab {
      color: #762323;
      text-align: center;
      font-size: 32px;
      margin-bottom: 30px;
      letter-spacing: 2px;
    }
    label {
      font-weight: bold;
      display: block;
      margin-top: 16px;
      margin-bottom: 4px;
      letter-spacing: 1px;
    }
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 1em;
      background: #f9f9f9;
      transition: border 0.2s;
    }
    input[type="text"]:focus,
    input[type="password"]:focus {
      border: 1.5px solid #b30000;
      outline: none;
      background: #fff;
    }
    .input-row {
      position: relative;
    }
    .show-pass {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 0.95em;
      color: #888;
      background: none;
      border: none;
      cursor: pointer;
      padding: 0 4px;
    }
    .remember-row {
      margin-top: 8px;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    input[type="checkbox"] {
      accent-color: #b30000;
      width: 16px;
      height: 16px;
    }
    .error-msg {
      color: #b30000;
      background: #ffeaea;
      border-radius: 4px;
      padding: 6px 10px;
      margin-bottom: 10px;
      font-size: 0.98em;
      display: none;
      animation: shake 0.3s;
    }
    @keyframes shake {
      10%, 90% { transform: translateX(-2px); }
      20%, 80% { transform: translateX(4px); }
      30%, 50%, 70% { transform: translateX(-8px); }
      40%, 60% { transform: translateX(8px); }
    }
    input[type="submit"] {
      padding: 12px 20px;
      background: linear-gradient(90deg, #b30000 60%, #762323 100%);
      border: none;
      color: white;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
      margin-top: 18px;
      width: 100%;
      font-size: 1.1em;
      letter-spacing: 1px;
      box-shadow: 0 2px 8px rgba(179,0,0,0.08);
      transition: background 0.2s, box-shadow 0.2s;
    }
    input[type="submit"]:hover {
      background: linear-gradient(90deg, #a00000 60%, #5a1a1a 100%);
      box-shadow: 0 4px 16px rgba(179,0,0,0.13);
      opacity: 0.97;
    }
    .thank-you {
      background: #fff;
      max-width: 400px;
      margin: 80px auto;
      padding: 40px 30px;
      border-radius: 8px;
      box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
      text-align: center;
      color: #b30000;
      font-size: 1.5em;
      animation: fadeInUp 0.8s;
    }
  `;
  document.head.appendChild(style);

  // Create heading
  const heading = document.createElement('h1');
  heading.className = 'lab';
  heading.textContent = 'Login';
  document.body.appendChild(heading);

  // Create form
  const form = document.createElement('form');
  form.id = 'loginForm';
  document.body.appendChild(form);

  // Error message
  const errorMsg = document.createElement('div');
  errorMsg.className = 'error-msg';
  form.appendChild(errorMsg);

  // Username
  const userLabel = document.createElement('label');
  userLabel.htmlFor = 'username';
  userLabel.textContent = 'Username';
  form.appendChild(userLabel);

  const userInput = document.createElement('input');
  userInput.type = 'text';
  userInput.name = 'username';
  userInput.id = 'username';
  userInput.required = true;
  userInput.placeholder = 'Enter your username';
  form.appendChild(userInput);

  // Password row (with show/hide)
  const passLabel = document.createElement('label');
  passLabel.htmlFor = 'password';
  passLabel.textContent = 'Password';
  form.appendChild(passLabel);

  const passRow = document.createElement('div');
  passRow.className = 'input-row';
  form.appendChild(passRow);

  const passInput = document.createElement('input');
  passInput.type = 'password';
  passInput.name = 'password';
  passInput.id = 'password';
  passInput.required = true;
  passInput.placeholder = 'Enter your password';
  passRow.appendChild(passInput);

  const showPassBtn = document.createElement('button');
  showPassBtn.type = 'button';
  showPassBtn.className = 'show-pass';
  showPassBtn.textContent = 'Show';
  passRow.appendChild(showPassBtn);

  showPassBtn.addEventListener('click', function () {
    if (passInput.type === 'password') {
      passInput.type = 'text';
      showPassBtn.textContent = 'Hide';
    } else {
      passInput.type = 'password';
      showPassBtn.textContent = 'Show';
    }
    passInput.focus();
  });

  // Remember Me
  const rememberRow = document.createElement('div');
  rememberRow.className = 'remember-row';
  const rememberCheckbox = document.createElement('input');
  rememberCheckbox.type = 'checkbox';
  rememberCheckbox.id = 'rememberMe';
  const rememberLabel = document.createElement('label');
  rememberLabel.htmlFor = 'rememberMe';
  rememberLabel.textContent = 'Remember Me';
  rememberLabel.style.fontWeight = 'normal';
  rememberRow.appendChild(rememberCheckbox);
  rememberRow.appendChild(rememberLabel);
  form.appendChild(rememberRow);

  // Submit button
  const submitBtn = document.createElement('input');
  submitBtn.type = 'submit';
  submitBtn.value = 'Login';
  form.appendChild(submitBtn);

  // Form submit handler
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    errorMsg.style.display = 'none';

    const username = userInput.value.trim();
    const password = passInput.value;

    if (!username || !password) {
      errorMsg.textContent = 'Please enter both username and password.';
      errorMsg.style.display = 'block';
      return;
    }
    if (password.length < 6) {
      errorMsg.textContent = 'Password must be at least 6 characters.';
      errorMsg.style.display = 'block';
      passInput.focus();
      return;
    }

    // Show thank you page
    document.body.innerHTML = '';
    const thankYouDiv = document.createElement('div');
    thankYouDiv.className = 'thank-you';
    thankYouDiv.textContent = 'Thank you for logging in, ' + username + '!';
    document.body.appendChild(thankYouDiv);
  });
});