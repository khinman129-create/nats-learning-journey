<?php
/**
 * The front page template file
 * 
 * This template is used for the static front page.
 * 
 * @package NatsLearning
 * @version 1.0
 */

get_header(); ?>

<main id="main" class="site-main front-page">
    
    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container">
            <div class="hero-content">
                
                <!-- Trust Indicators -->
                <div class="trust-indicators">
                    <div class="trust-item">
                        <span>🏆</span>
                        <span class="chinese-text">香港頂尖升學</span>
                    </div>
                    <div class="trust-item">
                        <span>🎯</span>
                        <span class="chinese-text">13間名校錄取</span>
                    </div>
                    <div class="trust-item">
                        <span>👨‍🏫</span>
                        <span class="chinese-text">專業導師團隊</span>
                    </div>
                    <div class="trust-item">
                        <span>💯</span>
                        <span class="chinese-text">100%成功率</span>
                    </div>
                </div>

                <h1 class="chinese-text"><?php echo esc_html(nats_get_option('hero_title', '智叻 360° 全人發展升小面試課程')); ?></h1>
                
                <p class="hero-subtitle chinese-text"><?php echo esc_html(nats_get_option('hero_subtitle', '香港頂尖升學專家，助您孩子邁向名校之路')); ?></p>
                
                <p class="chinese-text"><?php echo esc_html(nats_get_option('hero_description', '我們的獨特系統結合學術培訓、個人發展和面試技巧，為您的孩子提供全方位的升學準備。')); ?></p>

                <!-- Key Statistics -->
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">360°</div>
                        <div class="chinese-text">全人發展</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">2:8</div>
                        <div class="chinese-text">師生比例</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number chinese-text">長期</div>
                        <div class="chinese-text">培育方針</div>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="hero-actions" style="margin-top: 2rem;">
                    <a href="#contact" class="btn btn-primary chinese-text">立即預約諮詢</a>
                    <a href="#course" class="btn btn-outline chinese-text">了解課程詳情</a>
                </div>

                <!-- Social Proof -->
                <div style="margin-top: 2rem; display: flex; align-items: center; justify-content: center; gap: 1rem; flex-wrap: wrap;">
                    <div class="rating">
                        <span style="color: #fbbf24;">★★★★★</span>
                        <span style="margin-left: 0.5rem;">5.0 分</span>
                    </div>
                    <span style="color: rgba(255, 255, 255, 0.8);" class="chinese-text">來自過百位家長的真實評價</span>
                </div>

                <!-- Featured Image/Video Section -->
                <div class="hero-media" style="margin-top: 3rem; position: relative;">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="hero-image">
                            <?php the_post_thumbnail('large', array('class' => 'hero-img', 'style' => 'border-radius: var(--radius); box-shadow: var(--shadow-strong);')); ?>
                        </div>
                    <?php else : ?>
                        <!-- Placeholder or default content -->
                        <div class="hero-placeholder" style="background: rgba(255, 255, 255, 0.1); border-radius: var(--radius); padding: 3rem; text-align: center; backdrop-filter: blur(10px);">
                            <h3 style="color: rgba(255, 255, 255, 0.9); margin-bottom: 1rem;" class="chinese-text">升學成功的關鍵時刻</h3>
                            <p style="color: rgba(255, 255, 255, 0.8);" class="chinese-text">每個孩子都擁有無限潛能，我們助您發掘並發揮</p>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Floating Statistics -->
                    <div class="floating-stats" style="position: absolute; top: 1rem; right: 1rem; background: rgba(255, 255, 255, 0.95); padding: 1rem; border-radius: var(--radius); box-shadow: var(--shadow-medium); min-width: 150px;">
                        <div style="text-align: center;">
                            <div style="font-size: 1.5rem; font-weight: 700; color: hsl(var(--primary));">100%</div>
                            <div style="font-size: 0.9rem; color: hsl(var(--muted-foreground));" class="chinese-text">成功入學率</div>
                        </div>
                    </div>
                    
                    <div class="floating-stats" style="position: absolute; bottom: 1rem; left: 1rem; background: rgba(255, 255, 255, 0.95); padding: 1rem; border-radius: var(--radius); box-shadow: var(--shadow-medium); min-width: 150px;">
                        <div style="text-align: center;">
                            <div style="font-size: 1.5rem; font-weight: 700; color: hsl(var(--accent));">13+</div>
                            <div style="font-size: 0.9rem; color: hsl(var(--muted-foreground));" class="chinese-text">頂尖名校</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advantages Section -->
    <section id="advantages" class="advantages section">
        <div class="container">
            <div class="section-header">
                <div class="badge chinese-text">我們的優勢</div>
                <h2 class="chinese-text">為何選擇智叻教育？</h2>
                <p class="chinese-text">我們不僅是面試準備中心，更是您孩子全人發展的專業夥伴</p>
            </div>

            <div class="advantages-grid">
                
                <!-- Academic Excellence -->
                <div class="advantage-card">
                    <div class="advantage-icon">
                        🎓
                    </div>
                    <h3 class="chinese-text">頂尖學術培訓</h3>
                    <p class="mb-3 chinese-text">課程總監 Ms. Chan 擁有超過十年教育經驗，曾任職私立幼稚園，現任多間中小學樂器學會導師。</p>
                    
                    <div class="features-list">
                        <div class="feature-item" style="margin-bottom: 1rem; padding: 1rem; background: rgba(255,255,255,0.1); border-radius: 0.5rem;">
                            <strong class="chinese-text">角色：</strong> 課程總監<br>
                            <strong class="chinese-text">姓名：</strong> Ms. Chan<br>
                            <strong class="chinese-text">專長：</strong> 學術課程設計與實施
                        </div>
                    </div>
                    
                    <div class="highlight" style="display: flex; align-items: center; gap: 0.5rem; color: hsl(var(--secondary)); font-weight: 600;">
                        ❤️ <span class="chinese-text">深諳名校收生要求，確保課程緊貼實際需要</span>
                    </div>
                </div>

                <!-- Small Class Advantage -->
                <div class="advantage-card">
                    <div class="advantage-icon">
                        👥
                    </div>
                    <h3 class="chinese-text">黃金小班教學</h3>
                    <p class="mb-3 chinese-text">堅持2位導師對6-8名學生的小班模式，確保每位孩子都能得到充分關注和個人化指導。</p>
                    
                    <div class="features-list">
                        <div class="feature-item" style="margin-bottom: 1rem; padding: 1rem; background: rgba(255,255,255,0.1); border-radius: 0.5rem;">
                            <strong class="chinese-text">師生比例：</strong> 2:6-8<br>
                            <strong class="chinese-text">教學模式：</strong> 個人化關注<br>
                            <strong class="chinese-text">優勢：</strong> 全面照顧每位學生
                        </div>
                    </div>
                    
                    <div class="highlight" style="display: flex; align-items: center; gap: 0.5rem; color: hsl(var(--secondary)); font-weight: 600;">
                        ❤️ <span class="chinese-text">無論內向或活潑，每個孩子都能充分發揮</span>
                    </div>
                </div>

                <!-- Holistic Development -->
                <div class="advantage-card">
                    <div class="advantage-icon">
                        🌟
                    </div>
                    <h3 class="chinese-text">全人發展系統</h3>
                    <p class="mb-3 chinese-text">星級家長顧問 Ms. Yu 的兒子成功獲得13間頂尖小學取錄，包括SPCC及DBS，提供最實戰的升學策略。</p>
                    
                    <div class="features-list">
                        <div class="feature-item" style="margin-bottom: 1rem; padding: 1rem; background: rgba(255,255,255,0.1); border-radius: 0.5rem;">
                            <strong class="chinese-text">角色：</strong> 星級家長顧問<br>
                            <strong class="chinese-text">姓名：</strong> Ms. Yu<br>
                            <strong class="chinese-text">成就：</strong> 13間名校成功經驗
                        </div>
                    </div>
                    
                    <div class="highlight" style="display: flex; align-items: center; gap: 0.5rem; color: hsl(var(--secondary)); font-weight: 600;">
                        ❤️ <span class="chinese-text">第一手實戰經驗，千金難買的升學智慧</span>
                    </div>
                </div>

            </div>

            <!-- CTA Section -->
            <div class="text-center" style="margin-top: 4rem; padding: 3rem; background: hsl(var(--card)); border-radius: var(--radius); border: 1px solid hsl(var(--border));">
                <h3 style="color: hsl(var(--primary));" class="chinese-text">準備好讓您的孩子脫穎而出嗎？</h3>
                <p style="margin: 1rem 0;" class="chinese-text">立即預約免費諮詢，讓我們為您度身訂造專屬的升學方案</p>
                <a href="#contact" class="btn btn-primary chinese-text">免費諮詢</a>
            </div>
        </div>
    </section>

    <!-- Course Section -->
    <section id="course" class="course section">
        <div class="container">
            <div class="section-header">
                <div class="badge chinese-text">課程詳情</div>
                <h2 class="chinese-text">智叻 360° 全人發展升小面試課程</h2>
                <p class="chinese-text">系統性的三階段培訓，為您的孩子打造最強的面試實力</p>
            </div>

            <!-- Course Overview -->
            <div class="card mb-4">
                <h3 style="color: hsl(var(--primary));" class="chinese-text">課程概覽</h3>
                <div class="grid grid-2" style="margin-top: 2rem;">
                    <div>
                        <h4 class="chinese-text">課程特色</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 0.5rem;" class="chinese-text">✓ 雙語教學，全面提升語言能力</li>
                            <li style="margin-bottom: 0.5rem;" class="chinese-text">✓ 真實考核題目為藍本</li>
                            <li style="margin-bottom: 0.5rem;" class="chinese-text">✓ 系統化覆蓋所有面試範疇</li>
                            <li style="margin-bottom: 0.5rem;" class="chinese-text">✓ 專業Portfolio製作指導</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="chinese-text">課程資訊</h4>
                        <div style="background: hsl(var(--muted)); padding: 1.5rem; border-radius: var(--radius);">
                            <p class="chinese-text"><strong>對象：</strong> K2 及 K3 學童</p>
                            <p class="chinese-text"><strong>時長：</strong> 1年至1年6個月</p>
                            <p class="chinese-text"><strong>頻率：</strong> 每週1堂</p>
                            <p class="chinese-text"><strong>時間：</strong> 每堂75分鐘</p>
                            <p class="chinese-text"><strong>人數：</strong> 6-8人小班</p>
                            <p class="chinese-text"><strong>學費：</strong> $3,600 / 8堂</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course Phases -->
            <h3 class="text-center mb-4 chinese-text">三大進階階段</h3>
            <div class="course-phases">
                
                <div class="phase-card">
                    <div class="phase-number">1</div>
                    <h4 class="chinese-text">基礎建立期</h4>
                    <p class="chinese-text">教授過往面試題型，全面提升學術水平，建立穩固的知識基礎。</p>
                    <ul style="list-style: none; padding: 0; margin-top: 1rem;">
                        <li class="chinese-text">• 中英數基礎訓練</li>
                        <li class="chinese-text">• 邏輯思維培養</li>
                        <li class="chinese-text">• 基本禮儀教授</li>
                        <li class="chinese-text">• 自信心建立</li>
                    </ul>
                </div>

                <div class="phase-card">
                    <div class="phase-number">2</div>
                    <h4 class="chinese-text">技能深化期</h4>
                    <p class="chinese-text">加入模擬面試元素，熟悉流程，分析真實面試內容。</p>
                    <ul style="list-style: none; padding: 0; margin-top: 1rem;">
                        <li class="chinese-text">• 模擬面試練習</li>
                        <li class="chinese-text">• 應對技巧訓練</li>
                        <li class="chinese-text">• 情緒管理指導</li>
                        <li class="chinese-text">• 團體合作活動</li>
                    </ul>
                </div>

                <div class="phase-card">
                    <div class="phase-number">3</div>
                    <h4 class="chinese-text">實戰衝刺期</h4>
                    <p class="chinese-text">針對心儀學校，精練特定題型，強化應試技巧。</p>
                    <ul style="list-style: none; padding: 0; margin-top: 1rem;">
                        <li class="chinese-text">• 學校針對性準備</li>
                        <li class="chinese-text">• 高難度題型訓練</li>
                        <li class="chinese-text">• 壓力測試模擬</li>
                        <li class="chinese-text">• 最終檢視調整</li>
                    </ul>
                </div>

            </div>

            <!-- Course CTA -->
            <div class="text-center" style="margin-top: 4rem;">
                <h3 style="color: hsl(var(--primary));" class="chinese-text">立即開始您孩子的名校之路</h3>
                <p class="chinese-text">名額有限，請即預約諮詢</p>
                <div style="margin-top: 2rem;">
                    <a href="#contact" class="btn btn-primary chinese-text" style="margin-right: 1rem;">預約諮詢</a>
                    <a href="#contact" class="btn btn-secondary chinese-text">立即報名</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Section -->
    <section id="success" class="success section">
        <div class="container">
            <div class="section-header">
                <div class="badge chinese-text">成功實證</div>
                <h2 class="chinese-text">學生成就與家長見證</h2>
                <p class="chinese-text">數據說話，成功有跡可循</p>
            </div>

            <!-- Statistics -->
            <div class="stats-grid mb-4">
                <div class="card text-center">
                    <div class="stat-number" style="color: hsl(var(--primary));">100%</div>
                    <h4 class="chinese-text">成功率</h4>
                    <p class="chinese-text">所有學生均成功獲心儀學校取錄</p>
                </div>
                <div class="card text-center">
                    <div class="stat-number" style="color: hsl(var(--accent));">13+</div>
                    <h4 class="chinese-text">頂尖學校</h4>
                    <p class="chinese-text">成功協助學生進入名校</p>
                </div>
                <div class="card text-center">
                    <div class="stat-number" style="color: hsl(var(--secondary));">4.9</div>
                    <h4 class="chinese-text">家長評分</h4>
                    <p class="chinese-text">來自過百位家長的真實評價</p>
                </div>
                <div class="card text-center">
                    <div class="stat-number" style="color: hsl(var(--primary));">200+</div>
                    <h4 class="chinese-text">成功個案</h4>
                    <p class="chinese-text">多年來累積的豐富經驗</p>
                </div>
            </div>

            <!-- Success CTA -->
            <div class="text-center" style="margin-top: 4rem; padding: 3rem; background: hsl(var(--card)); border-radius: var(--radius); border: 1px solid hsl(var(--border));">
                <h3 style="color: hsl(var(--primary));" class="chinese-text">加入我們的成功行列</h3>
                <p class="chinese-text">讓您的孩子也成為下一個成功故事</p>
                <a href="#contact" class="btn btn-primary chinese-text">立即報名</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <div class="container">
            <div class="section-header">
                <div class="badge chinese-text">聯絡我們</div>
                <h2 class="chinese-text">立即開始您的升學之旅</h2>
                <p class="chinese-text">專業顧問隨時為您解答疑問，提供個人化諮詢服務</p>
            </div>

            <!-- Contact Methods -->
            <div class="contact-methods">
                
                <div class="contact-method">
                    <div class="contact-icon">📞</div>
                    <h4 class="chinese-text">電話諮詢</h4>
                    <p><?php echo esc_html(nats_get_option('contact_phone', '+852 2345 6789')); ?></p>
                    <p><small class="chinese-text">星期一至五 9:00-18:00<br>星期六 9:00-17:00</small></p>
                    <a href="tel:<?php echo esc_attr(nats_get_option('contact_phone', '+852 2345 6789')); ?>" class="btn btn-outline chinese-text">立即致電</a>
                </div>

                <div class="contact-method">
                    <div class="contact-icon">💬</div>
                    <h4>WhatsApp</h4>
                    <p><?php echo esc_html(nats_get_option('contact_whatsapp', '+852 9876 5432')); ?></p>
                    <p><small class="chinese-text">24小時快速回覆<br>即時解答您的疑問</small></p>
                    <a href="https://wa.me/<?php echo esc_attr(str_replace(array('+', ' '), '', nats_get_option('contact_whatsapp', '+852 9876 5432'))); ?>" class="btn btn-outline chinese-text" target="_blank">WhatsApp 諮詢</a>
                </div>

                <div class="contact-method">
                    <div class="contact-icon">📧</div>
                    <h4 class="chinese-text">電郵查詢</h4>
                    <p><?php echo esc_html(nats_get_option('contact_email', 'info@natslearning.hk')); ?></p>
                    <p><small class="chinese-text">詳細課程資料<br>專業升學建議</small></p>
                    <a href="mailto:<?php echo esc_attr(nats_get_option('contact_email', 'info@natslearning.hk')); ?>" class="btn btn-outline chinese-text">發送電郵</a>
                </div>

            </div>

            <!-- Final CTA -->
            <div class="text-center" style="margin-top: 4rem; padding: 3rem; background: var(--gradient-hero); color: hsl(var(--primary-foreground)); border-radius: var(--radius);">
                <h3 class="chinese-text">不要讓您的孩子錯過最佳機會</h3>
                <p style="color: rgba(255, 255, 255, 0.9);" class="chinese-text">立即行動，為您孩子的未來投資</p>
                
                <div style="margin: 2rem 0;">
                    <div style="background: rgba(255, 255, 255, 0.1); padding: 1.5rem; border-radius: var(--radius); display: inline-block;">
                        <h4 style="margin-bottom: 1rem;" class="chinese-text">限時優惠</h4>
                        <ul style="list-style: none; padding: 0; text-align: left;">
                            <li class="chinese-text">✓ 免費學習能力評估 (價值$500)</li>
                            <li class="chinese-text">✓ 免費個人化升學規劃 (價值$800)</li>
                            <li class="chinese-text">✓ 免費試堂體驗 (價值$450)</li>
                        </ul>
                    </div>
                </div>

                <div style="margin-top: 2rem;">
                    <a href="tel:<?php echo esc_attr(nats_get_option('contact_phone', '+852 2345 6789')); ?>" class="btn chinese-text" style="background: white; color: hsl(var(--primary)); margin-right: 1rem;">立即致電</a>
                    <a href="https://wa.me/<?php echo esc_attr(str_replace(array('+', ' '), '', nats_get_option('contact_whatsapp', '+852 9876 5432'))); ?>" class="btn btn-outline chinese-text" style="border-color: white; color: white;" target="_blank">WhatsApp 查詢</a>
                </div>
            </div>
        </div>
    </section>

    <?php do_action('nats_learning_hero_content'); ?>
    
</main>

<?php get_footer(); ?>