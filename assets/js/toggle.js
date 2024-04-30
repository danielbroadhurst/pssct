//  create a set of toggle content height values
window.onload = document.onload = () => {
  const toggleContentHeight = new Map();

  const toggleContent = document.querySelectorAll('.tab-content');

  toggleContent.forEach((content, i) => {
    const height = content.scrollHeight;
    const id = `toggle-content-${i}`;
    toggleContentHeight.set(id, height);
    content.id = id;
  });

  const questions = document.getElementsByClassName('toggle-item');

  for (let i = 0; i < questions.length; i++) {
    const e = questions[i];
    // add id to the content
    e.id = `toggle-${i}`;
    e.children[0].addEventListener('click', (f) => {
      // Call the function for the smooth animation
      openTab(f, e);
    });
  }

  function openTab(event, element) {
    event.preventDefault();

    const id = element.id;
    const content = document.getElementById(
      `toggle-content-${id.split('-')[1]}`,
    );
    content.classList.toggle('active');
    const height = toggleContentHeight.get(
      `toggle-content-${id.split('-')[1]}`,
    );
    if (content.style.height) {
      content.style.height = null;
    } else {
      content.style.height = height + 'px';
    }
  }
};
