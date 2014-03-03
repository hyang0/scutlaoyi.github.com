var sentences = new Array(
        "学习不是填满水桶，而是点燃火焰。--叶芝",
        "Don't be evil. --Google",
        "你是一个有思想的人，你就是一个有品味的人。",
        "要像赌徒那么不计代价地活着，但不要企图成为他们。",
        "每个女生心里都住着一个杀手，一个豌豆公主和一个淮河名妓。",
        "只有经历过失去一切再站起来，才能在体会到绝望后看淡一切。",
        "在陆地的人总想看见海，在海里的人总想遇见岛，在岛上的人总想去陆地。 --韩寒",
        "人总是喜欢给自己找各种懒惰的借口，把有些向往无限地延期，然后坐在那里叹息，羡慕别人。",
        "我未必能唤醒周围的人，我只是挣扎着不让自己沉沦。",
        "艺术家用谎言陈述事实，政治家用谎言掩盖真相。",
        "只有痴迷的黑客和具有创造力的怪人结成的反叛联盟才能把我们从愚蠢中拯救出来。他们接着教导我们，真正的专业和奉献精神，正是我们在屈服于世俗观念的'合理商业做法'之前的所做所为。--Hacker",
        "UNIX is simple. It just takes a genius to understand its simplicity. --Dennis Ritchie",
        "优秀的判断力来自经验，但经验来自于错误的判断。 --Fred Brooks",
        "我们这个世界的一个问题是，蠢人信誓旦旦，智者满腹狐疑。 --Bertrand Russell",
        "这个世界的人再多，也没有人为自己找的借口多。",
        "在自责中有一种满足感，当我们责备自己的时候，会觉得再没有人有权责备我们。 --《道连格雷的画像》",
        "初见谈笑欢，再见已惘然。",
        "雪崩的时候，没有一片雪花觉得自己有责任。",
        "只有当潮水退去，你才能看见到底是谁在光着屁股游泳。",
        "只要你的心完美，这个世界就完美。",
        "修得的人不在乎轮回，因为在他们看来，随便什么地方都是极乐净土。",
        "不忘初心，方得始终。",
        "别给自己找太多放弃的理由，因为比你好的人都还在坚持。而这个世界上所有的坚持，都是因为热爱。",
        "世界上最好的品质就是：不气馁，有召唤，爱自由。",
        "万千心语，谁知其详？唯尔寂静，轻声永传。",
        "我们的生命本来多轻盈，都是被这肉体和各种欲望的污浊给拖住。",
        "越是平凡的陪伴，就越长久。",
        "这个世界是如此复杂，以至于每个人都有自己的答案。与其评论答案的对错，不如听听答案背后的故事。",
        "我们每个人在各自的行业里，都能有一种对于其梦的权利。这样，即使风雪寒冬，我们也能够围坐在同一堆精神的篝火旁，充满信心地等待来年的春暖花开。",
        "不论在繁杂的世界里维系清醒有多么的难，闪念之间，你会发现，总有些东西，并不曾变淡。",
        "人的悲哀，在于被自己曾经厌恶的东西捕获。",
        "从跪伏而站起的那一天， 便是权力匍匐称臣的日子，便是极权一去不返的日子。",
        "If you live each day as if it was your last, someday you'll most certainly be right. --Steve Jobs",
        "But we are hackers, hackers have black terminals with green font colors. --John Nunemaker",
        "每一个优秀的人，都有一段沉默的时光。那一段时光，是付出了许多努力，忍受孤独和寂寞，不抱怨不诉苦，日后说起时，连自己都能被感动的日子。",
        "宪法原则中最重要的是“自由思想的原则”——不是确保我们喜欢的思想的自由，而是确保我们所憎恨的思想的自由。",
        "你现在要学的，就是如何不让自己的心倾注在一个地方。因为赌注越大，你会越输不起。"
        );
function generateSentence()
{
    var ind = Math.random() * sentences.length;
    return sentences[Math.floor(ind)];
}
