def fact(n):
    if n == 1 :
        return 1
    return n*fact(n-1)

num = raw_input()
print 'result:', fact(int(num))
