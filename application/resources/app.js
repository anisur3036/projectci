function getAge(dateString) {
  let today = new Date();
  let birthDate = new Date(dateString);
  let age = today.getFullYear() - birthDate.getFullYear();
  let m = today.getMonth() - birthDate.getMonth();
  if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
    age--;
  }
  return age;
}

// const hi = document.querySelector('.hi');
// hi.textContent = 'Anisur Rahmana';
// hi.innerHTML = '<li>html</li>';
const up = document.querySelector('.up');
const hi = document.querySelector('.hi');
const p1 = document.createElement('p');
p1.textContent = 'Tomal';
hi.appendChild(p1);
