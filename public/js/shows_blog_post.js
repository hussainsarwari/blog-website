const downloadBtn = document.getElementById('downloadBtn');
const modalOverlay = document.getElementById('modalOverlay');
const closeModal = document.getElementById('closeModal');
const secondes = document.querySelector('.seconde');
const poll_btn=document.querySelector(".poll_btn");
const poll_result=document.querySelector(".poll_result")
const loading_section=document.querySelector(".loading_section");
const quizze_btn=document.querySelector(".quizze-btn")


document.querySelector(".next_qustion").addEventListener("click",()=>{
  document.querySelector(".qustion").textContent='next qustion';
  document.querySelector(".ans-1").innerText='answer 1';
  document.querySelector(".ans-2").innerText='answer 2';
  document.querySelector(".ans-3").innerText='answer 3';
  document.querySelector(".ans-4").innerText='answer 4';
  document.querySelector("#ans-1").value='answer 1';
  document.querySelector("#ans-2").value='answer 2';
  document.querySelector("#ans-3").value='answer 3';
  document.querySelector("#ans-4").value='answer 4';

})


poll_btn.addEventListener("click",()=>{
    loading_section.classList.remove("hidden")
    setTimeout(() => {
        
        loading_section.classList.add("hidden")
    poll_result.classList.remove("hidden")
}, 2000);

})
quizze_btn.addEventListener("click",()=>{

    
    
    const selectedOption = document.querySelector('input[name="answer"]:checked');
    const resultDiv = document.getElementById('quizResult');
    const resultMessage = document.getElementById('resultMessage');

    if (!selectedOption) {
        const alertBox = document.getElementById('alertBox');

        // Show alert
        alertBox.classList.remove('hidden');
        setTimeout(() => alertBox.classList.add('opacity-100'), 10); // Smooth show

        // Automatically hide after 5 seconds
        setTimeout(() => {
            alertBox.classList.remove('opacity-100'); // Fade out
            setTimeout(() => alertBox.classList.add('hidden'), 500); // Fully hide
        }, 5000);
        return;
    }
  
    if (selectedOption.value === 'Paris') {
        resultMessage.textContent = 'Correct! Paris is the capital of France.';
        resultMessage.className = 'text-green-500';
        document.querySelector(".next_qustion").classList.remove("hidden")
        document.querySelector(".next_qustion").classList.add("flex")
        document.querySelector(".reset_btn").classList.add("hidden")
        document.querySelector(".reset_btn").classList.remove("flex")
       
    } else {
        resultMessage.textContent = `Wrong! The correct answer is Paris.`;
        resultMessage.className = 'text-red-500';
        document.querySelector(".reset_btn").classList.remove("hidden")
        document.querySelector(".reset_btn").classList.add("flex")
        document.querySelector(".next_qustion").classList.add("hidden")
        document.querySelector(".next_qustion").classList.remove("flex")
        
    }

    resultDiv.classList.remove('hidden');
    // document.getElementById('quizForm').classList.add('hidden');
})

document.querySelector(".reset_btn").addEventListener("click",()=>{

        document.getElementById('quizForm').classList.remove('hidden');
        document.getElementById('quizResult').classList.add('hidden');
        const options = document.querySelectorAll('input[name="answer"]');
        options.forEach(option => option.checked = false);
    
})


downloadBtn.addEventListener('click', () => {
    let timer =5;
    secondes.innerHTML=timer;
    modalOverlay.classList.remove('hidden');
    modalOverlay.querySelector('.scale-95').classList.add('scale-100');
    let interval=setInterval(()=>{  
        if (timer<=0) {
            
            modalOverlay.classList.add('hidden');
            modalOverlay.querySelector('.scale-100').classList.remove('scale-100');
           
            clearInterval(interval);
        }else{

            secondes.innerHTML=timer;
            timer--
        } 
      
      
    },1000)
    
});

// comment section 
// reply section
const replyBtns = document.querySelectorAll(".replyBtn");
const reply_and_registe = document.querySelectorAll(".reply_and_registe"); //register and replay
for (let i = 0; i < replyBtns.length; i++) {
   
  
    
    replyBtns[i].addEventListener("click", () => {
    // let r = replyBtn.dataset.email;
    // console.log(r)
    
    if (reply_and_registe[i].classList.contains("hidden")) {
        // Show the reply section with animation
       
        reply_and_registe[i].classList.remove("hidden");
        reply_and_registe[i].classList.remove("translate-y-5");
       
        
    } else {
      
        reply_and_registe[i].classList.add("translate-y-5");
        
        setTimeout(() => {
           
            reply_and_registe[i].classList.add("hidden");
        }, 500); // Duration matches the CSS transition time
    }
    
});


};


// like section
const likeBtns = document.querySelectorAll(".likeBtn");
const likeIcons = document.querySelectorAll(".likeIcon");
for (let i = 0; i < likeBtns.length; i++) {
likeBtns[i].addEventListener("click",(r)=>{

 
    
    if (likeIcons[i].classList.contains("liked")) {
        // Remove heart and revert to original icon
        likeIcons[i].classList.remove("liked", "heart-pop");
        likeIcons[i].innerHTML =
        `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />`;
        likeBtns[i].innerHTML = `<svg  class="w-5 h-5 mr-1 likeIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg> Like`;
    } else {
        // Change to heart icon with animation
        likeIcons[i].classList.add("liked", "heart-pop");
        likeBtns[i].innerHTML = `<svg  class="likeIcon w-5 h-5 mr-1 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
        </svg> Liked`;
    }
})
};



const scrollBox = document.querySelector('.scrollBox');
let isInScrollBox = false;

document.addEventListener('keydown', function (event) {
    const boxTop = scrollBox.getBoundingClientRect().top;
    const boxBottom = scrollBox.getBoundingClientRect().bottom;

    // Arrow Down key
    if (event.key === 'ArrowDown') {
    
        if (!isInScrollBox) {
            if (boxTop <= 0 && boxBottom > window.innerHeight) {
                isInScrollBox = true;
                document.body.style.overflow = 'hidden'; 
                scrollBox.style.overflowY = 'auto'; 
            }
        }

        if (isInScrollBox) {
            if (scrollBox.scrollTop + scrollBox.clientHeight >= scrollBox.scrollHeight) {
                isInScrollBox = false;
                document.body.style.overflow = ''; 
                scrollBox.style.overflowY = 'hidden'; 
            } else {
                scrollBox.scrollTop += 20; //
                event.preventDefault(); //
            }
        }
    }

    // Arrow Up key
    if (event.key === 'ArrowUp') {
        if (isInScrollBox) {
            if (scrollBox.scrollTop <= 0) {
                isInScrollBox = false;
                document.body.style.overflow = ''; 
                scrollBox.style.overflowY = 'hidden'; 
            } else {
                scrollBox.scrollTop -= 20; 
                event.preventDefault(); 
            }
        } else if (boxTop <= window.innerHeight && boxTop > 0) {
            isInScrollBox = true;
            document.body.style.overflow = 'hidden'; 
            scrollBox.style.overflowY = 'auto'; 
        }
    }
});


// CTA section
// function openModal(modalId) {
//     document.getElementById(modalId).classList.remove('hidden');
//     document.getElementById(modalId).classList.add('flex');
// }

// function closeModal(modalId) {
//     document.getElementById(modalId).classList.remove('flex');
//     document.getElementById(modalId).classList.add('hidden');
// }
// Sign Up Form Submission
document.getElementById('registerForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    let name=document.querySelector("#name_rgs")
    let email=document.querySelector("#email_rgs")
    let formData = {name:name,email:email}
console.log(formData);
    fetch('/register', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },

        body: formData
    }).then(response => response.json())
    .then(data => {
        if (data.success) {
            alert(data.message);
            closebox('signup-modal');
        }
    }).catch((e)=>{
        alert('something wrong')
        closeModal("signup-modal")
        console.log(e);
    });
});

// Contact Form Submission
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // let formData =
    let name=document.querySelector("#name_msg").value;
    let email=document.querySelector("#email_msg").value;
    let msg=document.querySelector("#msg").value;
    
    
    fetch('/contact', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: {
            name: name,
            email: email,
            msg:msg
        }
    }).then(response => response.json())
    .then(data => {
        if (data.success) {
            alert(data.message);
            closebox('contact-modal');
        }
    }).catch( (e) =>{
        console.log(e)
        closebox('contact-modal');
        alert('data not store')
        
        });
});

let signupmodalbtn=document.querySelector(".signup-modal-btn");
let contactmodalbtn=document.querySelector(".contact-modal-btn");
let closesignupmodalbtn=document.querySelector(".close-signup-modal-btn");
let closecontactmodalbtn=document.querySelector(".close-contact-modal-btn");

signupmodalbtn.addEventListener("click",()=>{
    
    document.getElementById('signup-modal').classList.remove('hidden');
    document.getElementById('signup-modal').classList.add('flex');
})
contactmodalbtn.addEventListener("click",()=>{

    document.getElementById('contact-modal').classList.remove('hidden');
    document.getElementById('contact-modal').classList.add('flex');
})
closesignupmodalbtn.addEventListener("click",()=>{
    
    document.getElementById('signup-modal').classList.add('hidden');
    document.getElementById('signup-modal').classList.remove('flex');
})
closecontactmodalbtn.addEventListener("click",()=>{

    document.getElementById('contact-modal').classList.add('hidden');
    document.getElementById('contact-modal').classList.remove('flex');
})



// Close Modal Function
function closebox(modalId) {
    document.getElementById(modalId).classList.remove('flex');
    document.getElementById(modalId).classList.add('hidden');
}
