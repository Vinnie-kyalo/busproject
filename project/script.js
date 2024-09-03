document.getElementById("about-me-link").addEventListener("click", function() {
    var aboutSection = document.getElementById("about-us");
    if (aboutSection.classList.contains("show")) {
        aboutSection.classList.remove("show");
    } else {
        aboutSection.classList.add("show");
    }
});


document.getElementById('searchForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const origin = document.getElementById('origin').value;
    const destination = document.getElementById('destination').value;
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;

    if (new Date(date + 'T' + time) <= new Date()) {
        alert('The selected date and time must be in the future.');
        return;
    }

    // Fetch available seats
    fetch(get_seats.php?origin=${origin}&destination=${destination}&date=${date}&time=${time})
        .then(response => response.json())
        .then(data => {
            displaySeats(data.seats);
            document.getElementById('busId').value = data.bus_id;
        });
});

function displaySeats(seats) {
    const seatsContainer = document.getElementById('availableSeats');
    seatsContainer.innerHTML = '';

    seats.forEach((seat, index) => {
        const seatDiv = document.createElement('div');
        seatDiv.classList.add('seat');
        if (seat.booked) {
            seatDiv.classList.add('booked');
        } else {
            seatDiv.addEventListener('click', () => toggleSeatSelection(seatDiv, index + 1));
        }
        seatsContainer.appendChild(seatDiv);
    });

    document.getElementById('bookingForm').style.display = 'block';
}

function toggleSeatSelection(seatDiv, seatNumber) {
    seatDiv.classList.toggle('selected');
    const selectedSeats = document.getElementById('selectedSeats').value.split(',').filter(Boolean);
    const seatIndex = selectedSeats.indexOf(String(seatNumber));

    if (seatIndex === -1) {
        if (selectedSeats.length < 6) {
            selectedSeats.push(seatNumber);
        } else {
            alert('You can select a maximum of 6 seats.');
        }
    } else {
        selectedSeats.splice(seatIndex, 1);
    }

    document.getElementById('selectedSeats').value = selectedSeats.join(',');
}

document.getElementById('bookingForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const selectedSeats = document.getElementById('selectedSeats').value.split(',').filter(Boolean);
    if (selectedSeats.length === 0) {
        alert('Please select at least one seat.');
        return;
    }

    const formData = new FormData(this);
    fetch('book_seats.php', {
        method: 'POST',
        body: formData
    }).then(response => response.json())
      .then(data => {
          if (data.success) {
              alert('Booking successful! Redirecting to Mpesa for payment...');
              // Redirect to Mpesa for payment
              window.location.href = data.mpesa_url;
          } else {
              alert('Booking failed. Please try again.');
          }
      });
});

$.ajax({
    url: 'get_seats.php',
    method: 'GET',
    data: {
        origin: 'Some Origin',
        destination: 'Some Destination',
        date: '2024-07-21',
        time: '15:00'
    },
    success: function(response) {
        console.log(response);
    },
    error: function(error) {
        console.log(error);
    }
});

$.ajax({
    url: 'get_seats.php',
    method: 'GET',
    data: {
        bus_id: 1 // Replace with the actual bus ID
    },
    success: function(response) {
        $('#seat-container').html(response); // Display the seat layout in the specified container
    },
    error: function(error) {
        console.log(error);
    }
});

$(document).ready(function() {
    $('#seatForm').on('submit', function(event) {
        event.preventDefault(); // Prevent form submission

        var busId = $('#bus_id').val();

        $.ajax({
            url: 'get_seats.php',
            method: 'GET',
            data: { bus_id: busId },
            success: function(response) {
                $('#seat-container').html(response);
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
});