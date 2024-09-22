<!-- Button to show cashier section -->
<button onclick="showCashierSection()">Show Cashier Section</button>

<!-- for cashier section -->
<section id="cashiers" class="hidden">
    <h2>Cashier Information</h2>
    <table>
        <thead>
            <tr>
                <th>Cashier ID</th>
                <th>Name</th>
                <th>Shift</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td>1</td>
                <td>Alice Johnson</td>
                <td>Morning</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Bob Smith</td>
                <td>Evening</td>
            </tr>
        </tbody>
    </table>
</section>

<script>
    function showCashierSection() {
        document.getElementById('cashiers').classList.remove('hidden');
    }
</script>
