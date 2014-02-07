var sentences = new Array(
        "学习不是填满水桶，而是点燃火焰。--叶芝",
        "Don't be evil. --Google"
        );
function generateSentence()
{
    var ind = Math.random() * sentences.length;
    return sentences[Math.floor(ind)];
}
