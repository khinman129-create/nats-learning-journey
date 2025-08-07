<?php
/**
 * The main template file
 * 
 * @package NatsLearning
 * @version 1.0
 */

get_header(); ?>

<main id="main" class="site-main">
    
    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container">
            <div class="hero-content">
                
                <!-- Trust Indicators -->
                <div class="trust-indicators">
                    <div class="trust-item">
                        <span>🏆</span>
                        <span>香港頂尖升學</span>
                    </div>
                    <div class="trust-item">
                        <span>🎯</span>
                        <span>13間名校錄取</span>
                    </div>
                    <div class="trust-item">
                        <span>👨‍🏫</span>
                        <span>專業導師團隊</span>
                    </div>
                    <div class="trust-item">
                        <span>💯</span>
                        <span>100%成功率</span>
                    </div>
                </div>

                <h1><?php echo esc_html(nats_get_option('hero_title', '智叻 360° 全人發展升小面試課程')); ?></h1>
                
                <p class="hero-subtitle"><?php echo esc_html(nats_get_option('hero_subtitle', '香港頂尖升學專家，助您孩子邁向名校之路')); ?></p>
                
                <p><?php echo esc_html(nats_get_option('hero_description', '我們的獨特系統結合學術培訓、個人發展和面試技巧，為您的孩子提供全方位的升學準備。')); ?></p>

                <!-- Key Statistics -->
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">360°</div>
                        <div>全人發展</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">2:8</div>
                        <div>師生比例</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">長期</div>
                        <div>培育方針</div>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="hero-actions" style="margin-top: 2rem;">
                    <a href="#contact" class="btn btn-primary">立即預約諮詢</a>
                    <a href="#course" class="btn btn-outline">了解課程詳情</a>
                </div>

                <!-- Social Proof -->
                <div style="margin-top: 2rem; display: flex; align-items: center; justify-content: center; gap: 1rem;">
                    <div class="rating">
                        <span style="color: #fbbf24;">★★★★★</span>
                        <span style="margin-left: 0.5rem;">5.0 分</span>
                    </div>
                    <span style="color: rgba(255, 255, 255, 0.8);">來自過百位家長的真實評價</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Advantages Section -->
    <section id="advantages" class="advantages section">
        <div class="container">
            <div class="section-header">
                <div class="badge">我們的優勢</div>
                <h2>為何選擇智叻教育？</h2>
                <p>我們不僅是面試準備中心，更是您孩子全人發展的專業夥伴</p>
            </div>

            <div class="advantages-grid">
                
                <!-- Academic Excellence -->
                <div class="advantage-card">
                    <div class="advantage-icon">
                        🎓
                    </div>
                    <h3>頂尖學術培訓</h3>
                    <p class="mb-3">課程總監 Ms. Chan 擁有超過十年教育經驗，曾任職私立幼稚園，現任多間中小學樂器學會導師。</p>
                    
                    <div class="features-list">
                        <div class="feature-item" style="margin-bottom: 1rem; padding: 1rem; background: rgba(255,255,255,0.1); border-radius: 0.5rem;">
                            <strong>角色：</strong> 課程總監<br>
                            <strong>姓名：</strong> Ms. Chan<br>
                            <strong>專長：</strong> 學術課程設計與實施
                        </div>
                    </div>
                    
                    <div class="highlight" style="display: flex; align-items: center; gap: 0.5rem; color: hsl(var(--secondary)); font-weight: 600;">
                        ❤️ 深諳名校收生要求，確保課程緊貼實際需要
                    </div>
                </div>

                <!-- Small Class Advantage -->
                <div class="advantage-card">
                    <div class="advantage-icon">
                        👥
                    </div>
                    <h3>黃金小班教學</h3>
                    <p class="mb-3">堅持2位導師對6-8名學生的小班模式，確保每位孩子都能得到充分關注和個人化指導。</p>
                    
                    <div class="features-list">
                        <div class="feature-item" style="margin-bottom: 1rem; padding: 1rem; background: rgba(255,255,255,0.1); border-radius: 0.5rem;">
                            <strong>師生比例：</strong> 2:6-8<br>
                            <strong>教學模式：</strong> 個人化關注<br>
                            <strong>優勢：</strong> 全面照顧每位學生
                        </div>
                    </div>
                    
                    <div class="highlight" style="display: flex; align-items: center; gap: 0.5rem; color: hsl(var(--secondary)); font-weight: 600;">
                        ❤️ 無論內向或活潑，每個孩子都能充分發揮
                    </div>
                </div>

                <!-- Holistic Development -->
                <div class="advantage-card">
                    <div class="advantage-icon">
                        🌟
                    </div>
                    <h3>全人發展系統</h3>
                    <p class="mb-3">星級家長顧問 Ms. Yu 的兒子成功獲得13間頂尖小學取錄，包括SPCC及DBS，提供最實戰的升學策略。</p>
                    
                    <div class="features-list">
                        <div class="feature-item" style="margin-bottom: 1rem; padding: 1rem; background: rgba(255,255,255,0.1); border-radius: 0.5rem;">
                            <strong>角色：</strong> 星級家長顧問<br>
                            <strong>姓名：</strong> Ms. Yu<br>
                            <strong>成就：</strong> 13間名校成功經驗
                        </div>
                    </div>
                    
                    <div class="highlight" style="display: flex; align-items: center; gap: 0.5rem; color: hsl(var(--secondary)); font-weight: 600;">
                        ❤️ 第一手實戰經驗，千金難買的升學智慧
                    </div>
                </div>

            </div>

            <!-- CTA Section -->
            <div class="text-center" style="margin-top: 4rem; padding: 3rem; background: hsl(var(--card)); border-radius: var(--radius); border: 1px solid hsl(var(--border));">
                <h3 style="color: hsl(var(--primary));">準備好讓您的孩子脫穎而出嗎？</h3>
                <p style="margin: 1rem 0;">立即預約免費諮詢，讓我們為您度身訂造專屬的升學方案</p>
                <a href="#contact" class="btn btn-primary">免費諮詢</a>
            </div>
        </div>
    </section>

    <!-- Course Section -->
    <section id="course" class="course section">
        <div class="container">
            <div class="section-header">
                <div class="badge">課程詳情</div>
                <h2>智叻 360° 全人發展升小面試課程</h2>
                <p>系統性的三階段培訓，為您的孩子打造最強的面試實力</p>
            </div>

            <!-- Course Overview -->
            <div class="card mb-4">
                <h3 style="color: hsl(var(--primary));">課程概覽</h3>
                <div class="grid grid-2" style="margin-top: 2rem;">
                    <div>
                        <h4>課程特色</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 0.5rem;">✓ 雙語教學，全面提升語言能力</li>
                            <li style="margin-bottom: 0.5rem;">✓ 真實考核題目為藍本</li>
                            <li style="margin-bottom: 0.5rem;">✓ 系統化覆蓋所有面試範疇</li>
                            <li style="margin-bottom: 0.5rem;">✓ 專業Portfolio製作指導</li>
                        </ul>
                    </div>
                    <div>
                        <h4>課程資訊</h4>
                        <div style="background: hsl(var(--muted)); padding: 1.5rem; border-radius: var(--radius);">
                            <p><strong>對象：</strong> K2 及 K3 學童</p>
                            <p><strong>時長：</strong> 1年至1年6個月</p>
                            <p><strong>頻率：</strong> 每週1堂</p>
                            <p><strong>時間：</strong> 每堂75分鐘</p>
                            <p><strong>人數：</strong> 6-8人小班</p>
                            <p><strong>學費：</strong> $3,600 / 8堂</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course Phases -->
            <h3 class="text-center mb-4">三大進階階段</h3>
            <div class="course-phases">
                
                <div class="phase-card">
                    <div class="phase-number">1</div>
                    <h4>基礎建立期</h4>
                    <p>教授過往面試題型，全面提升學術水平，建立穩固的知識基礎。</p>
                    <ul style="list-style: none; padding: 0; margin-top: 1rem;">
                        <li>• 中英數基礎訓練</li>
                        <li>• 邏輯思維培養</li>
                        <li>• 基本禮儀教授</li>
                        <li>• 自信心建立</li>
                    </ul>
                </div>

                <div class="phase-card">
                    <div class="phase-number">2</div>
                    <h4>技能深化期</h4>
                    <p>加入模擬面試元素，熟悉流程，分析真實面試內容。</p>
                    <ul style="list-style: none; padding: 0; margin-top: 1rem;">
                        <li>• 模擬面試練習</li>
                        <li>• 應對技巧訓練</li>
                        <li>• 情緒管理指導</li>
                        <li>• 團體合作活動</li>
                    </ul>
                </div>

                <div class="phase-card">
                    <div class="phase-number">3</div>
                    <h4>實戰衝刺期</h4>
                    <p>針對心儀學校，精練特定題型，強化應試技巧。</p>
                    <ul style="list-style: none; padding: 0; margin-top: 1rem;">
                        <li>• 學校針對性準備</li>
                        <li>• 高難度題型訓練</li>
                        <li>• 壓力測試模擬</li>
                        <li>• 最終檢視調整</li>
                    </ul>
                </div>

            </div>

            <!-- Locations -->
            <div class="text-center mb-4">
                <h3>上課地點</h3>
            </div>
            <div class="locations-grid">
                
                <div class="location-card">
                    <h4 style="color: hsl(var(--primary));">葵涌校</h4>
                    <p><strong>地址：</strong> <?php echo esc_html(nats_get_option('location1_address', '大連排道35-41號金基工業大廈')); ?></p>
                    <div class="features" style="margin-top: 1rem;">
                        <p><strong>特色：</strong></p>
                        <ul style="list-style: none; padding: 0;">
                            <li>• 寬敞明亮的學習環境</li>
                            <li>• 完善的教學設施</li>
                            <li>• 便利的交通位置</li>
                        </ul>
                    </div>
                </div>

                <div class="location-card">
                    <h4 style="color: hsl(var(--primary));">灣仔校</h4>
                    <p><strong>地址：</strong> <?php echo esc_html(nats_get_option('location2_address', '駱克道53-55號恒澤商業大廈')); ?></p>
                    <div class="features" style="margin-top: 1rem;">
                        <p><strong>特色：</strong></p>
                        <ul style="list-style: none; padding: 0;">
                            <li>• 市中心黃金地段</li>
                            <li>• 先進的多媒體設備</li>
                            <li>• 港鐵直達，交通便利</li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Parent Support -->
            <div class="card text-center" style="margin-top: 3rem;">
                <h3 style="color: hsl(var(--primary));">家長支援服務</h3>
                <div class="grid grid-3" style="margin-top: 2rem;">
                    <div>
                        <h4>📞 課後溝通</h4>
                        <p>每堂課後即時向家長匯報學習進度</p>
                    </div>
                    <div>
                        <h4>💬 線上聯繫</h4>
                        <p>WhatsApp隨時解答家長疑問</p>
                    </div>
                    <div>
                        <h4>🎯 策略分享</h4>
                        <p>神校媽媽顧問獨家升學策略</p>
                    </div>
                </div>
            </div>

            <!-- Course CTA -->
            <div class="text-center" style="margin-top: 4rem;">
                <h3 style="color: hsl(var(--primary));">立即開始您孩子的名校之路</h3>
                <p>名額有限，請即預約諮詢</p>
                <div style="margin-top: 2rem;">
                    <a href="#contact" class="btn btn-primary" style="margin-right: 1rem;">預約諮詢</a>
                    <a href="#contact" class="btn btn-secondary">立即報名</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Section -->
    <section id="success" class="success section">
        <div class="container">
            <div class="section-header">
                <div class="badge">成功實證</div>
                <h2>學生成就與家長見證</h2>
                <p>數據說話，成功有跡可循</p>
            </div>

            <!-- Statistics -->
            <div class="stats-grid mb-4">
                <div class="card text-center">
                    <div class="stat-number" style="color: hsl(var(--primary));">100%</div>
                    <h4>成功率</h4>
                    <p>所有學生均成功獲心儀學校取錄</p>
                </div>
                <div class="card text-center">
                    <div class="stat-number" style="color: hsl(var(--accent));">13+</div>
                    <h4>頂尖學校</h4>
                    <p>成功協助學生進入名校</p>
                </div>
                <div class="card text-center">
                    <div class="stat-number" style="color: hsl(var(--secondary));">4.9</div>
                    <h4>家長評分</h4>
                    <p>來自過百位家長的真實評價</p>
                </div>
                <div class="card text-center">
                    <div class="stat-number" style="color: hsl(var(--primary));">200+</div>
                    <h4>成功個案</h4>
                    <p>多年來累積的豐富經驗</p>
                </div>
            </div>

            <!-- Successful Schools -->
            <div class="text-center mb-4">
                <h3>成功獲錄取學校</h3>
                <p>我們的學生成功進入以下頂尖學府</p>
            </div>
            
            <div class="schools-grid">
                <div class="school-item">聖保羅男女中學附屬小學</div>
                <div class="school-item">拔萃男書院附屬小學</div>
                <div class="school-item">聖保祿學校（小學部）</div>
                <div class="school-item">德望小學暨幼稚園</div>
                <div class="school-item">瑪利曼小學</div>
                <div class="school-item">嘉諾撒聖心學校私立部</div>
                <div class="school-item">聖士提反女子中學附屬小學</div>
                <div class="school-item">香港培正小學</div>
                <div class="school-item">拔萃女小學</div>
                <div class="school-item">聖若瑟小學</div>
                <div class="school-item">協恩中學附屬小學</div>
                <div class="school-item">香港真光中學（小學部）</div>
            </div>

            <!-- Testimonials -->
            <div class="testimonials">
                <h3 class="text-center mb-4">家長見證</h3>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        "智叻教育的課程真的很全面，不只是操練面試技巧，更重要的是培養了孩子的自信心和表達能力。Ms. Yu的升學策略分享對我們幫助很大，最終成功獲得心儀學校取錄。"
                    </div>
                    <div class="testimonial-author">
                        - Emily媽媽 (孩子成功獲聖保羅男女中學附屬小學取錄)
                    </div>
                    <div class="rating" style="margin-top: 0.5rem; color: #fbbf24;">★★★★★</div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-content">
                        "小班教學真的很好，老師能夠照顧到每個孩子的需要。我家孩子比較內向，但在這裡慢慢變得有自信，面試時表現得很好。感謝智叻教育團隊的專業指導！"
                    </div>
                    <div class="testimonial-author">
                        - David爸爸 (孩子成功獲拔萃男書院附屬小學取錄)
                    </div>
                    <div class="rating" style="margin-top: 0.5rem; color: #fbbf24;">★★★★★</div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-content">
                        "課程設計很有系統，從基礎到進階都安排得很好。最讚的是Ms. Chan的學術指導和Ms. Yu的實戰經驗分享，讓我們對升學過程更有信心。"
                    </div>
                    <div class="testimonial-author">
                        - Sophie媽媽 (孩子成功獲德望小學取錄)
                    </div>
                    <div class="rating" style="margin-top: 0.5rem; color: #fbbf24;">★★★★★</div>
                </div>
            </div>

            <!-- Success CTA -->
            <div class="text-center" style="margin-top: 4rem; padding: 3rem; background: hsl(var(--card)); border-radius: var(--radius); border: 1px solid hsl(var(--border));">
                <h3 style="color: hsl(var(--primary));">加入我們的成功行列</h3>
                <p>讓您的孩子也成為下一個成功故事</p>
                <a href="#contact" class="btn btn-primary">立即報名</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <div class="container">
            <div class="section-header">
                <div class="badge">聯絡我們</div>
                <h2>立即開始您的升學之旅</h2>
                <p>專業顧問隨時為您解答疑問，提供個人化諮詢服務</p>
            </div>

            <!-- Contact Methods -->
            <div class="contact-methods">
                
                <div class="contact-method">
                    <div class="contact-icon">📞</div>
                    <h4>電話諮詢</h4>
                    <p><?php echo esc_html(nats_get_option('contact_phone', '+852 2345 6789')); ?></p>
                    <p><small>星期一至五 9:00-18:00<br>星期六 9:00-17:00</small></p>
                    <a href="tel:<?php echo esc_attr(nats_get_option('contact_phone', '+852 2345 6789')); ?>" class="btn btn-outline">立即致電</a>
                </div>

                <div class="contact-method">
                    <div class="contact-icon">💬</div>
                    <h4>WhatsApp</h4>
                    <p><?php echo esc_html(nats_get_option('contact_whatsapp', '+852 9876 5432')); ?></p>
                    <p><small>24小時快速回覆<br>即時解答您的疑問</small></p>
                    <a href="https://wa.me/<?php echo esc_attr(str_replace(array('+', ' '), '', nats_get_option('contact_whatsapp', '+852 9876 5432'))); ?>" class="btn btn-outline" target="_blank">WhatsApp 諮詢</a>
                </div>

                <div class="contact-method">
                    <div class="contact-icon">📧</div>
                    <h4>電郵查詢</h4>
                    <p><?php echo esc_html(nats_get_option('contact_email', 'info@natslearning.hk')); ?></p>
                    <p><small>詳細課程資料<br>專業升學建議</small></p>
                    <a href="mailto:<?php echo esc_attr(nats_get_option('contact_email', 'info@natslearning.hk')); ?>" class="btn btn-outline">發送電郵</a>
                </div>

            </div>

            <!-- Educational Centers -->
            <div class="text-center mb-4">
                <h3>教學中心</h3>
                <p>兩大校區，就近選擇最適合的上課地點</p>
            </div>

            <div class="locations-grid">
                
                <div class="location-card">
                    <h4 style="color: hsl(var(--primary));">葵涌教學中心</h4>
                    <p><strong>地址：</strong> <?php echo esc_html(nats_get_option('location1_address', '大連排道35-41號金基工業大廈')); ?></p>
                    
                    <div style="margin: 1.5rem 0;">
                        <h5>中心特色</h5>
                        <ul style="list-style: none; padding: 0;">
                            <li>• 全新裝修的現代化課室</li>
                            <li>• 完善的多媒體教學設備</li>
                            <li>• 安全舒適的學習環境</li>
                            <li>• 充足的停車位</li>
                        </ul>
                    </div>

                    <div style="margin: 1.5rem 0;">
                        <h5>開放時間</h5>
                        <p>星期一至五：9:00-21:00<br>星期六日：9:00-18:00</p>
                    </div>

                    <div>
                        <h5>附近地標</h5>
                        <p>近葵涌廣場、新都會廣場</p>
                    </div>
                </div>

                <div class="location-card">
                    <h4 style="color: hsl(var(--primary));">灣仔教學中心</h4>
                    <p><strong>地址：</strong> <?php echo esc_html(nats_get_option('location2_address', '駱克道53-55號恒澤商業大廈')); ?></p>
                    
                    <div style="margin: 1.5rem 0;">
                        <h5>中心特色</h5>
                        <ul style="list-style: none; padding: 0;">
                            <li>• 市中心黃金位置</li>
                            <li>• 高科技互動教學系統</li>
                            <li>• 專業級錄音錄影設備</li>
                            <li>• 家長休息區</li>
                        </ul>
                    </div>

                    <div style="margin: 1.5rem 0;">
                        <h5>開放時間</h5>
                        <p>星期一至五：9:00-21:00<br>星期六日：9:00-18:00</p>
                    </div>

                    <div>
                        <h5>附近地標</h5>
                        <p>近灣仔港鐵站、時代廣場</p>
                    </div>
                </div>

            </div>

            <!-- Consultation Process -->
            <div class="card" style="margin-top: 3rem;">
                <h3 class="text-center" style="color: hsl(var(--primary));">諮詢流程</h3>
                <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); margin-top: 2rem;">
                    
                    <div class="text-center">
                        <div style="width: 60px; height: 60px; border-radius: 50%; background: hsl(var(--primary)); color: hsl(var(--primary-foreground)); display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-weight: 700; font-size: 1.5rem;">1</div>
                        <h4>聯絡我們</h4>
                        <p>透過電話、WhatsApp或電郵預約諮詢</p>
                    </div>

                    <div class="text-center">
                        <div style="width: 60px; height: 60px; border-radius: 50%; background: hsl(var(--primary)); color: hsl(var(--primary-foreground)); display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-weight: 700; font-size: 1.5rem;">2</div>
                        <h4>免費評估</h4>
                        <p>專業顧問為您孩子進行學習能力評估</p>
                    </div>

                    <div class="text-center">
                        <div style="width: 60px; height: 60px; border-radius: 50%; background: hsl(var(--primary)); color: hsl(var(--primary-foreground)); display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-weight: 700; font-size: 1.5rem;">3</div>
                        <h4>度身訂造</h4>
                        <p>根據評估結果制定個人化學習方案</p>
                    </div>

                    <div class="text-center">
                        <div style="width: 60px; height: 60px; border-radius: 50%; background: hsl(var(--primary)); color: hsl(var(--primary-foreground)); display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-weight: 700; font-size: 1.5rem;">4</div>
                        <h4>開始學習</h4>
                        <p>正式開始您孩子的名校之路</p>
                    </div>

                </div>
            </div>

            <!-- Final CTA -->
            <div class="text-center" style="margin-top: 4rem; padding: 3rem; background: var(--gradient-hero); color: hsl(var(--primary-foreground)); border-radius: var(--radius);">
                <h3>不要讓您的孩子錯過最佳機會</h3>
                <p style="color: rgba(255, 255, 255, 0.9);">立即行動，為您孩子的未來投資</p>
                
                <div style="margin: 2rem 0;">
                    <div style="background: rgba(255, 255, 255, 0.1); padding: 1.5rem; border-radius: var(--radius); display: inline-block;">
                        <h4 style="margin-bottom: 1rem;">限時優惠</h4>
                        <ul style="list-style: none; padding: 0; text-align: left;">
                            <li>✓ 免費學習能力評估 (價值$500)</li>
                            <li>✓ 免費個人化升學規劃 (價值$800)</li>
                            <li>✓ 免費試堂體驗 (價值$450)</li>
                        </ul>
                    </div>
                </div>

                <div style="margin-top: 2rem;">
                    <a href="tel:<?php echo esc_attr(nats_get_option('contact_phone', '+852 2345 6789')); ?>" class="btn" style="background: white; color: hsl(var(--primary)); margin-right: 1rem;">立即致電</a>
                    <a href="https://wa.me/<?php echo esc_attr(str_replace(array('+', ' '), '', nats_get_option('contact_whatsapp', '+852 9876 5432'))); ?>" class="btn btn-outline" style="border-color: white; color: white;" target="_blank">WhatsApp 查詢</a>
                </div>
            </div>
        </div>
    </section>

    <?php do_action('nats_learning_hero_content'); ?>
    
</main>

<?php get_footer(); ?>