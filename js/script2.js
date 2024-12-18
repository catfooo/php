const memories = [
    {
        id: 1, 
        text: 'lost left eye',
        isLiked: false
    },
    {
        id: 2, 
        text: 'had 3 kids',
        isLiked: true
    },
    {
        id: 3, 
        text: 'lost mamma',
        isLiked: false
    }
];



for(let i = 0; i < memories.length; i++) {
    console.log(memories[i].text);
}