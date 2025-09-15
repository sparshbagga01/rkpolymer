<?php
$amount = $_GET['price'] ?? 0000; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Processing Payment</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .payment-box {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      text-align: center;
      width: 450px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .option-box {
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 12px;
      margin: 10px 0;
      background-color: #fafafa;
      text-align: left;
    }
    .option-header {
      display: flex;
      align-items: center;
      gap: 10px;
      cursor: pointer;
    }
    .option-header input[type="radio"] {
      width: 18px;
      height: 18px;
    }
    .option-header label {
      font-size: 15px;
      font-weight: 600;
      color: #333;
    }
    .option-box input[type="text"],
    .option-box select {
      margin-top: 10px;
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }
    .netbank-fields {
      display: none;
      margin-top: 10px;
    }
    .price {
      font-size: 20px;
      font-weight: bold;
      color: #333;
      margin-top: 20px;
    }
    .pay-btn {
      margin-top: 25px;
      background-color: #28a745;
      color: #fff;
      border: none;
      padding: 12px 25px;
      font-size: 16px;
      font-weight: 600;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .pay-btn:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>
  <div class="payment-box">
    <h2>Payment</h2>

    <div class="option-box">
      <div class="option-header">
        <input type="radio" name="payment_method" onclick="showFields('upi')" checked>
        <label>UPI ID - PhonePe, GPay, PayTM</label>
      </div>
      <input type="text" placeholder="Enter your UPI ID">
    </div>

    <div class="option-box">
      <div class="option-header">
        <input type="radio" name="payment_method" onclick="showFields('card')">
        <label>Debit / Credit Card</label>
      </div>
      <input type="text" placeholder="Enter Card Number">
    </div>

    <div class="option-box">
      <div class="option-header">
        <input type="radio" name="payment_method" onclick="showFields('netbanking')">
        <label>Net Banking</label>
      </div>


      <div class="netbank-fields" id="netbank-fields">
       <select name="bank_name" class="form-control">
  <option value="">-- Select Your Bank --</option>
  <option value="SBI">State Bank of India (SBI)</option>
  <option value="PNB">Punjab National Bank (PNB)</option>
  <option value="Bank_of_Baroda">Bank of Baroda (BoB)</option>
  <option value="Canara_Bank">Canara Bank</option>
  <option value="Union_Bank">Union Bank of India</option>
  <option value="Bank_of_India">Bank of India (BOI)</option>
  <option value="ICICI">ICICI Bank</option>
  <option value="HDFC">HDFC Bank</option>
  <option value="Axis">Axis Bank</option>
  <option value="Kotak_Mahindra">Kotak Mahindra Bank</option>
  <option value="Yes_Bank">Yes Bank</option>
  <option value="IndusInd">IndusInd Bank</option>
  <option value="IDBI">IDBI Bank</option>
  <option value="IDFC_First">IDFC First Bank</option>
  <option value="Central_Bank">Central Bank of India</option>
  <option value="Indian_Bank">Indian Bank</option>
  <option value="Indian_Overseas_Bank">Indian Overseas Bank</option>
  <option value="UCO_Bank">UCO Bank</option>
  <option value="Bank_of_Maharashtra">Bank of Maharashtra</option>
  <option value="Punjab_&_Sind_Bank">Punjab & Sind Bank</option>
  <option value="Ujjivan_Bank">Ujjivan Small Finance Bank</option>
  <option value="AU_Bank">AU Small Finance Bank</option>
  <option value="Bandhan_Bank">Bandhan Bank</option>
  <option value="Federal_Bank">Federal Bank</option>
  <option value="Karur_Vysya">Karur Vysya Bank</option>
  <option value="Dhanlaxmi_Bank">Dhanlaxmi Bank</option>
  <option value="RBL_Bank">RBL Bank</option>
</select>

        <!--<input type="text" placeholder="Account Holder Name">-->
        <!--<input type="text" placeholder="Account Number">-->
        <!--<input type="text" placeholder="IFSC Code">-->
        <!--<input type="text" placeholder="Transaction Password / OTP">-->
        <!--<input type="text" placeholder="Remarks (Optional)">-->
        <input type="text" value="₹<?php echo number_format($amount); ?>" readonly>
      </div>
    </div>

    <div class="price">Total: ₹<?php echo number_format($amount); ?></div>

    <button class="pay-btn">Pay Now</button>
  </div>

  <script>
    function showFields(method) {
      document.getElementById("netbank-fields").style.display = method === "netbanking" ? "block" : "none";
    }

    showFields('upi');
  </script>
  
  <script>
  function showFields(method) {
    document.getElementById("netbank-fields").style.display = method === "netbanking" ? "block" : "none";
    selectedMethod = method;
  }

  let selectedMethod = 'upi'; 

  document.querySelector('.pay-btn').addEventListener('click', function () {
    if (selectedMethod === 'upi') {
      alert("❌ Invalid UPI ID");
      location.reload(); 
      return;
    }

    if (selectedMethod === 'card') {
      alert("❌ Invalid Card Number");
      location.reload();
      return;
    }

    if (selectedMethod === 'netbanking') {
      alert("❌ Please select a valid bank");
      location.reload();
      return;
    }

    alert("❌ Payment Failed");
    location.reload();
  });

  showFields('upi');
</script>

</body>
</html>
