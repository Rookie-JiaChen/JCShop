-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2021-03-17 03:01:30
-- 服务器版本： 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jc_shop`
--

-- --------------------------------------------------------

--
-- 表的结构 `jc_admin`
--

CREATE TABLE `jc_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `jc_admin`
--

INSERT INTO `jc_admin` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'tiger', '43b90920409618f188bfc6923f16b9fa'),
(5, 'scott', 'b303f1f8667ecd2acb460f3bd007b0cd');

-- --------------------------------------------------------

--
-- 表的结构 `jc_goods`
--

CREATE TABLE `jc_goods` (
  `goodsid` int(11) NOT NULL,
  `typeid` int(11) NOT NULL,
  `norms` int(11) NOT NULL,
  `goodsname` varchar(50) NOT NULL,
  `size` varchar(100) NOT NULL,
  `installment` varchar(50) NOT NULL,
  `prodate` varchar(12) NOT NULL,
  `goodsprice` varchar(10) NOT NULL,
  `discount` float NOT NULL,
  `photo` varchar(100) NOT NULL,
  `introduction` varchar(1000) NOT NULL,
  `recommend` int(5) NOT NULL,
  `newgoods` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `jc_goods`
--

INSERT INTO `jc_goods` (`goodsid`, `typeid`, `norms`, `goodsname`, `size`, `installment`, `prodate`, `goodsprice`, `discount`, `photo`, `introduction`, `recommend`, `newgoods`) VALUES
(5, 2, 2021001, '仪纤文艺复古长袖磨毛翻领衬衫', 'S@M@L@XL@XXL@XXL', '不分期@43.68x3期@22.37x6期@11.65x12期', '', '128', 1, 'upimages/goods5.jpg', '仪纤文艺复古长袖磨毛翻领衬衫女2020秋冬新品学院风蝴蝶结直筒显瘦减龄上衣9563 ', 1, 1),
(7, 6, 20210120, 'Frau Holle德国进口 95白鹅绒被 恒温控温羽绒被芯', '奶白色@卡其色@淡紫色@绿色@蓝色', '不分期@3632.66x3期@1816.33x6期@908.16x12期', '2021-01-22', '10898', 1, 'upimages/good7.jpg', 'Frau Holle德国进口 95白鹅绒被 恒温控温羽绒被芯 保暖冬被子180支纯棉冬厚被 220*240（1.8米/2米床适用）', 1, 1),
(8, 7, 20210125, '小米11 5G 骁龙888', '白色@黑色@蓝色@烟紫', '不分期@1433.00x3期@716.5x6期@358.25x12期', '', '4299', 0.9, 'upimages/goods100.jpg', '小米11 5G 骁龙888 2K AMOLED四曲面柔性屏 1亿像素 55W有线闪充 50W无线闪充 8GB+256GB 蓝色 游戏手机', 1, 1),
(9, 3, 2021006, '网红猪饲料一整箱零食大礼包', '720g@2000g@2500g', '不分期@39.92x3期@20.26x6期@10.42x12期', '2021-01-24', '59', 0.8, 'upimages/good102.jpg', '网红猪饲料一整箱零食大礼包组合休闲小吃好吃的送男女友批发便宜', 1, 1),
(10, 1, 20210125, 'TOBAAT外套男工装秋冬季夹克', 'M@L@XL@XXL@XXL', '不分期@39.92x3期@20.26x6期@10.42x12期', '2021-01-25', '138', 0.95, 'upimages/goods101.jpg', 'TOBAAT外套男工装秋冬季夹克男衣服韩版潮流修身休闲服饰男生外套棒球服男上衣时尚加绒情侣装男短外套 M8228蓝色 XL', 1, 1),
(11, 7, 20210124, 'Apple iPhone 12', ' 香槟金@月光银@玫瑰金@星空灰', '不分期@39.92x3期@20.26x6期@10.42x12期', '2021-01-24', '5999', 0.8, 'upimages/good105.jpg', 'Apple/全新苹果国行iPhone12苹果12全网通双卡5G手机', 1, 1),
(12, 3, 20210124, '卫龙辣条大面筋', '720g@2000g@2500g', '不分期@39.92x3期@20.26x6期@10.42x12期', '2021-01-24', '20', 0.6, 'upimages/good103.jpg', '卫龙辣条大面筋大辣棒小面筋休闲零食亲嘴烧辣味网红食品麻辣口味', 1, 1),
(13, 3, 20210124, '正宗 乐事薯片40g整箱批发', '720g@2000g@2500g', '不分期@39.92x3期@20.26x6期@10.42x12期', '2021-01-24', '35', 0.9, 'upimages/good104.jpg', ' 正宗 乐事薯片40g整箱批发休闲食品3包好吃的网红零食大礼包便宜', 1, 1),
(14, 1, 20210125, '工装裤男新品时尚ins潮牌修身裤子', 'M@L@XL@XXL@XXL', '不分期@39.92x3期@20.26x6期@10.42x12期', '2021-01-25', '89', 1, 'upimages/goods102.jpg', '工装裤男新品时尚ins潮牌修身裤子男士休闲裤宽松大码运动裤男哈伦小脚裤男装长裤 K602卡其色 L(100-120斤）', 1, 1),
(15, 1, 20210125, 'MARKLESS 短袖T恤男纯色修身圆领打底衫', ' M@L@XL@XXL@XXL', '不分期@39.92x3期@20.26x6期@10.42x12期', '2021-01-25', '69', 0.95, 'upimages/goods103.jpg', 'MARKLESS 短袖T恤男纯色修身圆领打底衫青年短袖休闲T恤TXA5630M白色', 1, 1),
(16, 5, 23425234, '比亚迪', '1.4L手动时尚型@1.4L 手动舒适型@180 手动时尚型', '不分期@39.92x3期@20.26x6期@10.42x12期', '1995', '999999', 0.4, 'upimages/goods16.jpg', '比亚迪 宋 订金 99元 全新整车 到店自选 2016 2.0TID自动豪华型', 0, 0),
(2, 5, 2147483647, '宝马 7', '1.4L手动时尚型@1.4L 手动舒适型@180 手动时尚型', '不分期@39.92x3期@20.26x6期@10.42x12期', '2006', '888999', 0.6, 'upimages/goods2.jpg', '宝马 7系订金499元 2017款 740Le', 0, 0),
(1, 5, 20210124, '特斯拉 Model Y', '长续航版@高性能版', '不分期@39.92x3期@20.26x6期@10.42x12期', '', '339900', 1, 'upimages/good108.jpg', '594 公里 续航里程 最高时速 217 km/h 0-100 公里/小时 加速 5.1 秒', 1, 1),
(20, 5, 12312312, '捷达', '1.4L手动时尚型@1.4L 手动舒适型@180 手动时尚型', '不分期@39.92x3期@20.26x6期@10.42x12期', '2007-4-24', '250000', 0.9, 'upimages/goods20.jpg', '一汽-大众 捷达订金499元 2017款 1.4L 手动时尚型', 1, 0),
(21, 1, 20210125, '花花公子卫衣男圆领套头连帽上衣', 'M@L@XL@XXL@XXL', '不分期@39.92x3期@20.26x6期@10.42x12期', '2021-01-25', '139', 1, 'upimages/goods104.jpg', '花花公子卫衣男圆领套头连帽上衣2020新款加绒加厚假两件秋季冬装 122白色 XL', 1, 1),
(22, 2, 20201211, '唐狮2020秋新款长袖衬衫', 'M@L@XL@XXL@XXL', '不分期@34.10x3期@17.45x6期@9.07x12期', '2020-12-11', '99.9', 1, 'upimages/good22.jpg', ' 唐狮2020秋新款长袖衬衫女娃娃领长袖衬衫', 1, 1),
(23, 6, 123123, '大号环保储物箱', '奶白色@卡其色@淡紫色@绿色@蓝色', '不分期@39.92x3期@20.26x6期@10.42x12期', '1995-1-1', '80', 0.4, 'upimages/goods23.jpg', '禧天龙Citylong 塑料收纳箱整理箱大号环保储物箱3个装 卡其色60L 6063', 1, 1),
(24, 1, 20210125, '罗蒙西裤男2020秋冬新款商务休闲正装', '29@30@31@32@33@34@35', '不分期@39.92x3期@20.26x6期@10.42x12期', '2020-12-25', '169', 1, 'upimages/goods105.jpg', '罗蒙西裤男2020秋冬新款商务休闲正装厚西装裤韩版修身直筒男裤青年男士长裤子 9937黑色 ', 1, 1),
(25, 6, 2342342, '旋转拖把', '奶白色@卡其色@淡紫色@绿色@蓝色', '不分期@39.92x3期@20.26x6期@10.42x12期', '2006-4-24', '50', 0.3, 'upimages/goods25.jpg', '茶花 自动甩干旋转拖把不锈钢杆桶家用墩布好神拖 4707', 1, 1),
(26, 7, 123312, '联想笔记本', '15.6英寸/i7独显@15.6英寸/i7独显', '不分期@39.92x3期@20.26x6期@10.42x12期', '', '4588', 0.5, 'upimages/goods26.jpg', '联想(Lenovo)小新潮7000 14英寸轻薄窄边框笔记本电脑(i5-7200U 8G 1T+128G PCIE 940MX 2G)银', 1, 1),
(27, 7, 343432, '机械革命', '15.6英寸/i7独显@ 15.6英寸/i7独显', '不分期@39.92x3期@20.26x6期@10.42x12期', '', '5000', 0.5, 'upimages/goods27.jpg', '机械革命（MECHREVO）NX5-V631 游戏台式电脑主机（七代i5-7400 8GDDR4 128GSSD+1T GTX1060*3G独显 win10）', 1, 1),
(33, 4, 20170531, '海尔', '直驱变频波轮@微联直驱变频波轮', '不分期@￥2571×3期@￥1304.5×6期@￥671.25×12期 @￥354.62×24期', '2017-05-31', '5800', 0.8, 'upimages/goods33.jpg', '8公斤直驱变频波轮全自动洗衣机 京东微联智能APP控制 EB80BM2WU1', 1, 1),
(34, 4, 20170532, '榨汁机', '高贵白@天然蓝@深沉黑@鸡蛋黄', '不分期@￥2571×3期@￥1304.5×6期@￥671.25×12期 @￥354.62×24期', '2017-05-31', '500', 0.7, 'upimages/goods34.jpg', '金正（NINTAUS）破壁机破壁料理机加热豆浆机多功能家用辅食机榨汁机搅拌机冷热双杯950 粉色', 1, 1),
(35, 4, 20170533, '空调柜机', '优惠套装1@优惠套装2@优惠套装3@优惠套装4', '不分期@￥2571×3期@￥1304.5×6期@￥671.25×12期 @￥354.62×24期', '2017-05-30', '5000', 0.85, 'upimages/goods35.jpg', '海信（Hisense）5匹 定速 冷暖 低温启动 方形简约 空调柜机 (KFR-120LW/S5253-3)', 1, 1),
(37, 7, 20210112, '联想 拯救者 Y7000P 2020款 英特尔酷睿i7 15.6英寸游戏笔记本', '[i7/16GB/512G SSD/2060]@[i7/16GB/1T SSD/2060]@[i7/16GB/512G SSD/1650Ti]', '不分期@2833.00x3期@1416.50x6期@708.25x12期', '2020-05', '8499', 1, 'upimages/goods37.jpg', '第十代英特尔酷睿i7-10875H/Windows 10 家庭中文版/15.6英寸/16G/512G SSD/ GeForce RTX? 2060 6G独显/钛晶灰', 1, 1),
(38, 7, 20210115, '魅族 17 Pro 8+128G', '全网通公开版8+128GB@全网通公开版12+256GB', '不分期@1433.00x3期@716.00x6期@358.25x12期', '2020-05', '4299', 1, 'upimages/goods38.jpg', '高通骁龙 865 + UFS 3.1 + LPDDR5 | 6400W 全场景 AR 专业影像系统 | 煅烧陶瓷机身 | 120 Hz 尝鲜模式', 1, 1),
(39, 7, 20190117, '苹果 Apple MacBook Pro 16', '九代i7 16+512G 灰@九代i7 16+1TB 银@九代i9 16+1TB 灰@九代i9 16+1TB 银', '不分期@5799.66x3期@2899.83x6期@1449.91x12期', '2019-01-17', '17399', 1, 'upimages/goods39.jpg', 'Apple 2019款 MacBook Pro 16 九代i7 16G 512G 深空灰 RP5300M显卡 笔记本电脑 轻薄本 MVVJ2CH/A', 1, 0),
(40, 2, 20210124, '复古可爱女学生背带裙连衣裙', 'S@M@L@XL@XXL@XXL', '不分期@13.30x3期@6.65x6期@3.32x12期', '', '99.9', 1, 'upimages/good100.jpg', '复古可爱女学生背带裙女中长款春夏新款纯色宽松连衣裙潮', 1, 1),
(41, 2, 20210124, '日系正统jk制服格裙中长款连衣裙', 'S@M@L@XL@XXL@XXL', '不分期@43.68x3期@22.37x6期@11.65x12期', '2021-01-24', '100.5', 0.9, 'upimages/good101.jpg', '日系正统jk制服格裙中牌同厂jk制服山吹温柔一刀水手服百褶裙学院', 1, 1),
(42, 6, 20210124, '北欧电脑桌台式家用学习办公写字桌', '0.8米@1.2米@1.5米', '不分期@13.30x3期@6.65x6期@3.32x12期', '2021-01-24', '50', 0.9, 'upimages/good106.jpg', '北欧电脑桌台式家用学习办公写字桌餐桌简易现代卧室儿童实木书桌', 1, 0),
(43, 4, 20210124, '松下变频玻璃无霜四门式家用电冰箱', '0.8米@1.2米@1.5米', '不分期@5799.66x3期@2899.83x6期@1449.91x12期', '2021-01-24', '5599', 1, 'upimages/good107.jpg', '松下变频玻璃无霜四门式十字门对开门家用电冰箱白色NR-E49CG1-XW', 1, 1),
(44, 7, 20210313, '魅族 18 Pro 飞雪流光 旗舰5G手机', '8GB+128GB@8GB+256GB@12GB+256GB', '不分期@1833.0x3期@916.50x6期@458.25x12期', '2021-03-08', '5499', 1, 'upimages/goods40.jpg', '魅族 18 Pro 飞雪流光 骁龙888 2K AMOLED曲面屏 4400W前摄光学防抖 40W无线超充 旗舰5G手机', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `jc_indent`
--

CREATE TABLE `jc_indent` (
  `orderid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `commodity` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `consignee` varchar(30) NOT NULL,
  `sex` varchar(2) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `telephone` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `express` varchar(30) DEFAULT NULL,
  `orderdate` varchar(11) NOT NULL,
  `buyer` varchar(30) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `total` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `jc_indent`
--

INSERT INTO `jc_indent` (`orderid`, `userid`, `commodity`, `quantity`, `consignee`, `sex`, `address`, `postcode`, `telephone`, `email`, `express`, `orderdate`, `buyer`, `status`, `total`) VALUES
(19, 2, '魅族 18 Pro 飞雪流光 旗舰5G手机@魅族 17 Pro 8+128G@', '2@1@', 'Guessed', '男', '广东省深圳市宝安区西乡街道', '518000', '134343343488', '791598204@qq.om', '嘉辰快递', '2021-03-13', 'Guessed', '未处理', '15297'),
(18, 2, '日系正统jk制服格裙@Frau Holle德国进口 95白鹅绒被 恒温控温羽绒被芯@', '1@1@', 'Guessed', '男', '广东省深圳市宝安区西乡街道', '518000', '134343343488', '791598204@qq.om', '顺水快递', '2021-01-25', 'Guessed', '未处理', '10998.5'),
(15, 2, '苹果 Apple MacBook Pro 16@', '1@', 'Guessed', '男', '广东省深圳市宝安区西乡街道', '518000', '13410000', '791598204@qq.om', '嘉辰快递', '2021-01-18', 'Guessed', '未处理', '17399'),
(17, 2, '日系正统jk制服格裙@TOBAAT外套男工装秋冬季夹克@Frau Holle德国进口 95白鹅绒被 恒温控温羽绒被芯@', '1@1@1@', 'Guessed', '男', '广东省深圳市宝安区西乡街道', '518000', '134343343488', '791598204@qq.om', '东风快递', '2021-01-25', 'Guessed', '未处理', '11136.5'),
(16, 2, '松下变频玻璃无霜四门式家用电冰箱@小米11 5G 骁龙888@Apple iPhone 12@花花公子卫衣男圆领套头连帽上衣@仪纤文艺复古长袖磨毛翻领衬衫@正宗 乐事薯片40g整箱批发@', '1@1@1@1@1@1@', 'Guessed', '男', '广东省深圳市宝安区西乡街道', '518000', '134343343488', '791598204@qq.om', '嘉辰快递', '2021-01-25', 'Guessed', '未处理', '16199'),
(13, 2, '海尔@榨汁机@', '1@5@', 'Guessed', '男', '广东省深圳市宝安区西乡街道', '', '134343343488', '791598204@qq.om', '嘉辰快递', '2021-01-08', 'Guessed', '未处理', '8300'),
(12, 2, '机械革命@联想笔记本@', '1@3@', 'wad', '男', '广东省深圳市宝安区西乡街道', '', '134343343488', '791598204@qq.om', '嘉辰快递', '2021-01-07', 'wada', '未处理', '18764'),
(14, 2, '海尔@榨汁机@', '7@5@', 'Guessed', '男', '广东省深圳市宝安区西乡街道', '518000', '134343343488', '791598204@qq.om', '嘉辰快递', '2021-01-08', 'Guessed', '已收货', '43100');

-- --------------------------------------------------------

--
-- 表的结构 `jc_type`
--

CREATE TABLE `jc_type` (
  `typeid` int(11) NOT NULL,
  `typename` varchar(30) NOT NULL,
  `typedes` text
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `jc_type`
--

INSERT INTO `jc_type` (`typeid`, `typename`, `typedes`) VALUES
(1, '男装', '夹克 单西 风衣 羽绒服 皮衣 T恤 马甲 牛仔裤 运动裤 平角裤'),
(2, '女装', '蕾丝连衣裙 印花连衣裙 半身裙 牛仔裙 休闲裤 时尚套装 旗袍 打底裤\r\n'),
(3, '零食', '进口牛奶 牛肉干 核桃 红枣 猪肉铺 啤酒 白酒 火腿 熟食 寿司料理'),
(4, '家电', '电话煲 豆浆机 扫地机 剃须刀 净水器 冰箱 空调 平板电视 洗衣机'),
(5, '汽车', '雪佛兰 路虎 艾泽瑞 科沃兹 迈巴赫 比亚迪 宝马 \r\n'),
(6, '家居', '被子 床单 枕头 浴巾 地毯 桌布 十字绣 墙贴 花瓶 国画'),
(7, '电脑办公', '笔记本 平板 DIY电脑 游戏本 显卡 键盘 显示器 打印机 手机\n');

-- --------------------------------------------------------

--
-- 表的结构 `jc_user`
--

CREATE TABLE `jc_user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `regdate` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `jc_user`
--

INSERT INTO `jc_user` (`userid`, `username`, `password`, `email`, `address`, `telephone`, `regdate`) VALUES
(1, 'wyh', 'ff9b29f2c15263e6b2c11344ecc05fbf', '123@123.com', '13', '123', '2012-12-12'),
(2, '123', '202cb962ac59075b964b07152d234b70', '791598204@qq.com', '', '134343427514', '2021-01-03'),
(3, '111', '698d51a19d8a121ce581499d7b701668', '1244911120@qq.com', 'none', '13410000', '2021-01-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jc_admin`
--
ALTER TABLE `jc_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `jc_goods`
--
ALTER TABLE `jc_goods`
  ADD PRIMARY KEY (`goodsid`),
  ADD KEY `index_goodsid` (`goodsid`);

--
-- Indexes for table `jc_indent`
--
ALTER TABLE `jc_indent`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `jc_type`
--
ALTER TABLE `jc_type`
  ADD PRIMARY KEY (`typeid`);

--
-- Indexes for table `jc_user`
--
ALTER TABLE `jc_user`
  ADD PRIMARY KEY (`userid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `jc_admin`
--
ALTER TABLE `jc_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `jc_goods`
--
ALTER TABLE `jc_goods`
  MODIFY `goodsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- 使用表AUTO_INCREMENT `jc_indent`
--
ALTER TABLE `jc_indent`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- 使用表AUTO_INCREMENT `jc_type`
--
ALTER TABLE `jc_type`
  MODIFY `typeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- 使用表AUTO_INCREMENT `jc_user`
--
ALTER TABLE `jc_user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
