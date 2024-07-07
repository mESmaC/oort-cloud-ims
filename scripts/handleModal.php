<?php
header('Content-Type: application/javascript');
?>
const formatDate = (dateStr) => {
    const date = new Date(dateStr);
    const mm = String(date.getMonth() + 1).padStart(2, '0');
    const dd = String(date.getDate()).padStart(2, '0');
    const yyyy = date.getFullYear();
    return `${mm}-${dd}-${yyyy}`;
};

export const handleModal = (card1Content, modal, modalBody, closeModal) => {
    card1Content.addEventListener('click', () => {
        modal.style.display = 'block';
    });

    closeModal.onclick = function() {
        modal.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
};

export const populateModal = (data, modalBody) => {
    let table = `<table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Group</th>
                            <th>Count</th>
                            <th>Expiration Date</th>
                            <th>ID</th>
                        </tr>
                    </thead>
                    <tbody>`;
    data.forEach(item => {
        table += `<tr>
                    <td>${item.name}</td>
                    <td>$${item.price.toFixed(2)}</td>
                    <td>${item.group}</td>
                    <td>${item.count}</td>
                    <td>${formatDate(item.dateexp)}</td>
                    <td>${item.id}</td>
                  </tr>`;
    });
    table += `</tbody></table>`;
    modalBody.innerHTML = table;
};