// Array of clues
const clues = [
    {
      title: "Clue 1",
      description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla bibendum ipsum nec est molestie luctus. Donec nec faucibus felis, eget sodales ex. Suspendisse eget efficitur turpis. In gravida est quam, sit amet blandit mi pretium eu. Nulla eget vulputate libero.",
      type: "text"
    },
    {
      title: "Clue 2",
      description: "Etiam tristique luctus mauris, sed venenatis justo efficitur id. Aliquam sagittis felis vel lorem commodo, sit amet congue enim fringilla. Nam euismod erat at nisl aliquet vestibulum. Morbi in sapien blandit, imperdiet eros non, consectetur lorem.",
      type: "video",
      url: "https://www.youtube.com/embed/VIDEO_ID"
    },
    {
      title: "Clue 3",
      description: "Mauris blandit est nec lobortis facilisis. Pellentesque quis lobortis dolor. Nunc id enim non tellus euismod ullamcorper sed ac nisl. Vivamus aliquet leo ut sem venenatis faucibus. Duis vitae nulla eget ante lacinia convallis vitae eget quam.",
      type: "image",
      url: "https://via.placeholder.com/500x500"
    },
    {
      title: "Clue 4",
      description: "In hac habitasse platea dictumst. Proin vel blandit metus, eget iaculis lacus. Duis fermentum purus sit amet mi malesuada consequat. Vestibulum maximus, ex vitae mollis suscipit, tellus eros tincidunt metus, in blandit enim lorem a magna.",
      type: "text"
    },
    {
      title: "Clue 5",
      description: "Sed rhoncus, ipsum ut varius auctor, dolor lorem euismod purus, vel blandit elit elit vel elit. Morbi sagittis auctor aliquet. Praesent ultricies bibendum lectus, vel ultricies ex maximus ut. Morbi id quam nulla. Donec faucibus mauris mauris, vel ultrices felis vehicula ac.",
      type: "game",
      url: "https://www.example.com/game"
    }
  ];
  
  // Display clues
  const clueList = document.querySelector('#clue-list');
  
  clues.forEach(clue => {
    const li = document.createElement('li');
    li.innerHTML = `
      <h3>${clue.title}</h3>
      <p>${clue.description}</p>
    `;
    
    if (clue.type === "video") {
      const video = document.createElement('iframe');
      video.src = clue.url;
      li.appendChild(video);
    } else if (clue.type === "image") {
      const image = document.createElement('img');
      image.src = clue.url;
      li.appendChild(image);
    } else if (clue.type === "game") {
      const game = document.createElement('iframe');
      game.src = clue.url;
      li.appendChild(game);
    }
    
    clueList.appendChild(li);
  });
  
  // Dead end links
  const deadEndLinks = document.querySelectorAll('a[href^="deadend"]');
  
  deadEndLinks.forEach(link => {
    link.addEventListener('click', event => {
      event.preventDefault();
      alert("Sorry, this clue is a dead end. Please try again!");
    });
  });
  