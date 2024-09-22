//Admin Dashboard Script

function toggleSection(sectionId) {
    const sections = ['tables', 'menu', 'customers', 'cashiers'];
    sections.forEach(id => {
        const section = document.getElementById(id);
        section.classList.toggle('hidden', id !== sectionId);
    });
}

function editTable(tableNumber) {
    const statusCell = document.getElementById(`status-${tableNumber}`);
    const currentStatus = statusCell.textContent;
    const newStatus = currentStatus === 'Occupied' ? 'Available' : 'Occupied';
    statusCell.textContent = newStatus;
    alert(`Table ${tableNumber} status changed to: ${newStatus}`);
}

/*function editTable(tableNumber) {
    // Get the status cell by ID
    const statusCell = document.getElementById(`statuS-${tableNumber}`);
    
    // Get the current status
    const currentStatus = statusCell.textContent.trim();
    
    // Toggle the status
    const newStatus = currentStatus === 'Occupied' ? 'Available' : 'Occupied';
    
    // Update the status cell with the new status
    statusCell.textContent = newStatus;
    
    // Optionally show an alert with the new status
    alert(`Table ${tableNumber} status changed to: ${newStatus}`);
}*/


/*function changeStatus(tableId) {
    // Get the button by the dynamic ID based on the tableId
    var button = document.getElementById('statusButton' + tableId);
    
    // Get the status <td> element by the dynamic ID based on the tableId
    var statusCell = document.getElementById('statuS-' + tableId);

    // Define an array of statuses to cycle through
    var statuses = ['Pending', 'In Progress', 'Completed'];

    // Get the current status from the status <td> element
    var currentStatus = statusCell.innerHTML;

    // Find the index of the current status in the statuses array
    var currentIndex = statuses.indexOf(currentStatus);

    // Determine the next status index, cycling through the array
    var nextIndex = (currentIndex + 1) % statuses.length;

    // Update the status <td> and the button text to the next status
    statusCell.innerHTML = statuses[nextIndex];
    button.innerHTML = 'Change Status'; // Optional: Keep the button text static if desired
} */


//function viewTable(tableNumber) {
  //  alert("Viewing table number: " + tableNumber);
    // Here, you can add more details about the table if needed
//}
    function editItem(itemName) {
        alert("Editing item: " + itemName);
    }

    function deleteItem(itemName) {
        alert("Deleting item: " + itemName);
    }

   // function addMenuItem() {
    // Implement functionality for adding a new menu item here
   // alert('Add Menu Item functionality goes here.');
//}
    function toggleOrders(customerId) {
    const ordersSection = document.getElementById('orders-' + customerId);
    ordersSection.classList.toggle('hidden');
}


